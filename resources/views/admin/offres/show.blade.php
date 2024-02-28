@extends('admin.master')

@section('title', 'Voir une offre')

@section('header', 'Voir une offre')

<!--**********************************
    Content body start
***********************************-->
@section('content')
    <div class="content-body " style="">
		<div class="container-fluid">
	        <div class="d-flex align-items-center mb-4">
		        <h3 class="mb-0 me-auto">une offre spécifique</h3>
                <div>
                    <a href="javascript:void(0);" class="icon-btn me-3"> <i class="fas fa-envelope"></i></a>
                    <a href="javascript:void(0);" class="icon-btn me-3"><i class="fas fa-phone-alt"></i></a>
                    <a href="javascript:void(0);" class="icon-btn"><i class="fas fa-info"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-xl-9 col-xxl-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body pb-0">
                                                <h4 class="card-title mb-3">Détails de l'offre <span class="text-primary fw-bold uppercase">{{ $offre->titre }}</span></h4>
                                                <div class="row mb-3">
                                                    <div class="col-xl-6">
                                                        <ul class="list-style-1">
                                                            <li><label class="form-label mb-0 custom-label">Administrateur</label>
                                                                <p class="mb-0"> {{ $offre->admin->prenom }} {{ $offre->admin->nom }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Type d'offre</label>
                                                                <p class="mb-0"> {{ $offre->typeoffre->nom_typeoffre }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Département</label>
                                                                <p class="mb-0"> {{ $offre->departement->nom_departement }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Domaine</label>
                                                                <p class="mb-0"> {{ $offre->domaine->nom_domaine }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Entreprise</label>
                                                                <p class="mb-0"> {{ $offre->entreprise->nom_entreprise }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Titre</label>
                                                                <p class="mb-0"> {{ $offre->titre }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Lieu</label>
                                                                <p class="mb-0"> {{ $offre->lieu }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Salaire</label>
                                                                <p class="mb-0"> {{ number_format($offre->salaire, thousands_separator : ' ') }}</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <ul class="list-style-1">
                                                            <li><label class="form-label mb-0 custom-label">Date début</label>
                                                                <p class="mb-0"> {{ $offre->date_debut }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Date fin</label>
                                                                <p class="mb-0"> {{ $offre->date_fin }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Description</label>
                                                                <p class="mb-0"> {{ $offre->description }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Contenu</label>
                                                                <p class="mb-0"> {{ $offre->contenu }}</p>
                                                            </li>
                                                            <li><label class="form-label mb-0 custom-label">Photo</label>
                                                                <p class="mb-0"><img src=" {{asset('storage/'.$offre->photo)}}" width="150" height="150" class="img-fluid rounded-circle" alt="">
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="card-footer border-0">
                                    {{-- <a href="javascript:void(0);" class="btn btn-primary me-2 mb-1"><i
                                            class="far fa-check-circle me-2"></i>Apply</a>
                                    <a href="javascript:void(0);" class="btn btn-warning me-2 mb-1"><i
                                            class="fas fa-share-alt me-2"></i>Share Job</a> --}}
                                    <a href="javascript:void(0);" class="btn btn-secondary mb-1"><i
                                            class="fas fa-print me-2"></i>Print</a>
                            </div>
                            <div>
                                <a href="{{ route('offre.index') }}" class="text-primary">Retour à la liste des offres</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!--**********************************
    Content body end
***********************************-->