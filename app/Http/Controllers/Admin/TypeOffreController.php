<?php

namespace App\Http\Controllers\Admin;

use App\Models\TypeOffre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTypeOffreRequest;
use App\Http\Requests\UpdateTypeOffreRequest;

class TypeOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.typeoffres.index', [
            'typeoffres' => TypeOffre::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.typeoffres.create', [
            'typeoffre' => new TypeOffre,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeOffreRequest $request)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;

        TypeOffre::create($data);
        return redirect()->route('typeoffre.index')->with('success', 'Enregistrement effectué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeOffre $typeoffre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeOffre $typeoffre)
    {
        return view('admin.typeoffres.edit', compact('typeoffre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeOffreRequest $request, TypeOffre $typeoffre)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->user()->id;

        $typeoffre->update($data);
        return redirect()->route('typeoffre.index')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeOffre $typeoffre)
    {
        $typeoffre->delete();
        return back()->with('success', 'Suppression effectuée avec succès');   
    }
}
