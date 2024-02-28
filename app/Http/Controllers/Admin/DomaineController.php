<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomaineRequest;
use App\Models\Departement;
use App\Models\Domaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domaines = Domaine::with('departement')->get();
        return view('admin.domaines.index', compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Domaines.create', [
            'domaine' => new Domaine(),
            'departements' => Departement::pluck('nom_departement', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DomaineRequest $request)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;
        Domaine::create($data);
        return redirect()->route('domaine.index')->with('success', 'Enregistrement effectué avec succés');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domaine $domaine)
    {
        return view('admin.Domaines.edit', [
            'domaine' => $domaine,
            'departements' => Departement::pluck('nom_departement', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DomaineRequest $request, Domaine $domaine)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;
        $domaine->update($data);
        return redirect()->route('domaine.index')->with('success', 'Modification effectuée avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domaine $domaine)
    {
        $domaine->delete();
        return redirect()->route('domaine.index')->with('success', 'Suppression effectuée avec succés');
    }
}
