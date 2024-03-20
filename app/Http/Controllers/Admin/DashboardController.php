<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Domaine;
use App\Models\Entreprise;
use App\Models\Offre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (): View {
        $listDepartment = Departement::all();
        $listeDomaine = Domaine::all();
        $listeEntreprise = Entreprise::all();
        $listeOffre = Offre::all();
        return view('home', compact('listDepartment', 'listeDomaine', 'listeEntreprise', 'listeOffre'));
    }
}
