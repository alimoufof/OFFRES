<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offre;
use App\Models\Domaine;
use App\Models\TypeOffre;
use App\Models\Entreprise;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $offres = Offre::with('typeoffre','departement','domaine','entreprise')->get();
       return view('admin.offres.index', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.offres.create', [
        'offre' => new Offre,
        'typeoffres' => TypeOffre::pluck('nom_typeoffre', 'id'),
        'departements' => Departement::pluck('nom_departement', 'id'),
        'domaines' => Domaine::pluck('nom_domaine', 'id'),
        'entreprises' => Entreprise::pluck('nom_entreprise', 'id'),
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOffreRequest $request)
    {
        $data =  $request->validated();

        if ($request->hasFile('photo')) {
            $photoOffre = $request->file('photo')->store('offres', 'public');
            $data['photo'] = $photoOffre;
        }

        $data['admin_id'] = Auth::guard('admin')->user()->id;
        $data['etat'] = $request->etat == 'on' ? 1 : 0;
        Offre::create($data);
        return redirect()->route('offre.index')->with('success', 'Enregistrement effetué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        return view('admin.offres.show', [
            'offre' => $offre,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        return view('admin.offres.edit', [
            'offre' => $offre,
            'typeoffres' => TypeOffre::pluck('nom_typeoffre','id'),
            'departements' => Departement::pluck('nom_departement','id'),
            'domaines' => Domaine::pluck('nom_domaine','id'),
            'entreprises' => Entreprise::pluck('nom_entreprise','id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOffreRequest $request, Offre $offre)
    {
        $data =  $request->validated();

        if ($request->hasFile('photo')) {

            if ($offre->photo) {
                Storage::disk('public')->delete($offre->photo);
            }

            $photoOffre = $request->file('photo')->store('offres', 'public');
            $data['photo'] = $photoOffre;
        }

        $data['admin_id'] = Auth::guard('admin')->user()->id;
        $data['etat'] = $request->etat == 'on' ? 1 : 0;
        $offre->update($data);
        return redirect()->route('offre.index')->with('success', 'Modification effetuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        if ($offre->photo)
        {
            Storage::disk('public')->delete($offre->photo);
        }

        $offre->delete();
        return back()->with('success', 'Suppression effetuée avec succès');
    }
}
