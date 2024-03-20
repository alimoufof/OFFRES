<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Admin;
use App\Models\Departement;
use App\Models\Domaine;
use App\Models\Entreprise;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AuthController extends Controller
{
    // Retourne la page d'inscription
    public function index(): View
    {
        return view('admin.auth.register');
    }

    // Sauvegarde des données de l'administrateur
    public function store(RegisterRequest $request)
    {
        $admin = new Admin();

        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;
        $admin->telephone = $request->telephone;
        $admin->adresse = $request->adresse;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect()->route('login')->with('success', 'Enregistrement effectué avec succès');
    }

    // Retourne la page de connexion
    public function login()
    {
        return view('admin.auth.login');
    }

    // Permet de s'authentifier
    public function singIn(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $verifyUser = Admin::where('email', $request->email)
            ->first();
        if ($verifyUser) {
            $credentials = $request
                ->only('email', 'password');
            if (Auth::guard('admin')->attempt($credentials)) {
                //redireger sur son tableau de bord
                return redirect()->route('dashboard.index');
            } else {
                return back()->with('errorConnection', "Email ou mot de passe incorrect");
            }
        } else {
            return back()->with('errorConnection', "Email ou mot de passe incorrect");
        }
    }

    // Affiche les informations de l'utilisateur connecté sur la page Profile
    public function show()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profiles.show', compact('admin'));
    }

    // Retourne la page d'édition de l'administrateur connecté
    public function edit(Admin $admin)
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profiles.edit', compact('admin'));
    }

    // Modification des informations de l'administrateur
    public function update(UpdateRegisterRequest $request, Admin $admin)
    {
        $admin->update($request->validated());
        return redirect()->route('profile.show')->with('success', 'Modification du profil effectuée avec succès');
    }

    // Retourne la page d'édition du mot de passe
    public function edit_password(Admin $admin)
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profiles.editPassword', compact('admin'));
    }

    // Modification du mot de passe de l'administrateur
    public function update_password(PasswordRequest $request)
    {
        // Récupérer l'administrateur actuellement authentifié
        $admin = Auth::guard('admin')->user();

        // Vérifier si le mot de passe actuel correspond
        if (!Hash::check($request->input('password'), $admin->password)) {
            return redirect()->back()->withErrors(['password' => 'Le mot de passe actuel est incorrect.']);
        }

        // // Vérifier si le nouveau mot de passe correspond à la confirmation
        if ($request->input('new_password') !== $request->input('confirm_password')) {
            return redirect()->back()->withErrors(['confirm_password' => 'La confirmation du mot de passe ne correspond pas.']);
        }

        // Mettre à jour le mot de passe avec le nouveau mot de passe
        $admin->update(['password' => Hash::make($request->input('new_password'))]);

        // Rediriger avec un message de succès
        return redirect()->route('profile.show')->with('success', 'Mot de passe modifié avec succès.');
    }

    // Modification de la photo de profile de l'administrateur
    public function changeAvatar(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:4096']
        ]);

        if ($request->hasFile('avatar')) {
            if ($admin->avatar) {
                Storage::disk('public')->delete($admin->avatar);
            }

            $imagePath = $request->file('avatar')->store('admin_avatar', 'public');
            $data['avatar'] = $imagePath;
        }
        $admin->update($data);

        return redirect()->route('profile.show')->with('updateProfil', 'Photo de profil changé avec succés');
    }

    // Decconexion de l'administrateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
