<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModerateurRequest;
use App\Http\Requests\UpdateModerateurRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Redirect;
use Storage;

class ModerateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moderateurs = Admin::all();
        return view('admin.moderateurs.index', compact('moderateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.moderateurs.create', [
            'admin' => new Admin()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModerateurRequest $request)
    {
        $moderateur = new Admin();

        $moderateur->nom = $request->nom;
        $moderateur->prenom = $request->prenom;
        $moderateur->telephone = $request->telephone;
        $moderateur->adresse = $request->adresse;
        $moderateur->email = $request->email;
        $moderateur->password = bcrypt($request->password);
        $moderateur->avatar = $request->avatar;
        
        if ($request->hasFile('avatar')) {
            $imageAdmin = $request->file('avatar')->store('moderateurs', 'public');
            $moderateur['avatar'] = $imageAdmin;
        }
        
        $moderateur->save();
        // Admin::create($moderateur);
        return redirect()->route('moderateur.index')->with('success', 'Enregistrement effectué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $moderateur)
    {
        return view('admin.moderateurs.edit', [
            'moderateur' => $moderateur,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModerateurRequest $request, Admin $moderateur)
    {
        $data = $request->validated();

        if ($request->hasFile('avatar')) {

            if ($moderateur->avatar) {
                Storage::disk('public')->delete($moderateur->avatar);
            }

            $imageAdmin = $request->file('avatar')->store('moderateurs', 'public');
            $data['avatar'] = $imageAdmin;
        }

        $moderateur->update($data);
        return redirect()->route('moderateur.index')->with('success', 'Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $moderateur)
    {
        if ($moderateur->avatar) {
            Storage::disk('public')->delete($moderateur->avatar);
        }
        $moderateur->delete();
        return redirect()->back()->with('success', 'Suppression effectuée avec succès');
    }
}
