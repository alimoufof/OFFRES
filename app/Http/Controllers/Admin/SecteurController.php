<?php

namespace App\Http\Controllers\Admin;

use App\Models\Secteur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSecteurRequest;
use App\Http\Requests\UpdateSecteurRequest;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return view('admin.secteurs.index', [
            'secteurs' => Secteur::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.secteurs.create', [
            'secteur' => new Secteur,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSecteurRequest $request)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;

        Secteur::create($data);
        return redirect()->route('secteur.index')->with('success', 'Enregistrement effectué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Secteur $Secteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secteur $secteur)
    {
        return view('admin.secteurs.edit', compact('secteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSecteurRequest $request, Secteur $secteur)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;

        $secteur->update($data);
        return redirect()->route('secteur.index')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secteur $secteur)
    {
        $secteur->delete();
        return back()->with('success', 'Suppression effectuée avec succès');   
    }
}
