<?php

namespace App\Http\Controllers\Admin;

use App\Models\Secteur;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $entreprises = Entreprise::all();
       return view('admin.entreprises.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.entreprises.create', [
        'entreprise' => new Entreprise,
        'secteurs' => Secteur::pluck('nom_secteur','id'),
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrepriseRequest $request)
    {
        $data =  $request->validated();

        if ($request->hasFile('logo')) {
            $logoEntreprise = $request->file('logo')->store('entreprises', 'public');
            $data['logo'] = $logoEntreprise;
        }

        $data['admin_id'] = Auth::guard('admin')->user()->id;
        $entreprise = Entreprise::create($data);
        // Associe les secteurs sélectionnés à l'entreprise nouvellement créée
        $entreprise->secteurs()->sync($request->input('secteurs'));
        return redirect()->route('entreprise.index')->with('success', 'Enregistrement effetué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        return view('admin.entreprises.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        return view('admin.entreprises.edit', [
            'entreprise' => $entreprise,
            'secteurs' => Secteur::pluck('nom_secteur','id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $data =  $request->validated();

        if ($request->hasFile('logo')) {

            if ($entreprise->logo) {
                Storage::disk('public')->delete($entreprise->logo);
            }

            $logoEntreprise = $request->file('logo')->store('entreprises', 'public');
            $data['logo'] = $logoEntreprise;
        }

        $data['admin_id'] = Auth::guard('admin')->user()->id;
        $entreprise->update($data);
        $entreprise->secteurs()->sync($request->validated('secteurs'));
        return redirect()->route('entreprise.index')->with('success', 'Modification effetuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        if ($entreprise->logo) 
        {
            Storage::disk('public')->delete($entreprise->logo);
        }

        $entreprise->delete();
        return back()->with('success', 'Suppression effetuée avec succès');
    }
}
