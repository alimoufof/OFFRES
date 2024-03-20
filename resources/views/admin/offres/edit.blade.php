@extends('admin.master')

@section('title', 'Modifier une offre')

@section('header', 'Edition d\'une offre')

<!--**********************************
    Content body start
***********************************-->
@section('content')
    <div class="content-body " style="">
		<div class="container-fluid">
	        <div class="d-flex align-items-center mb-4">
		        <h3 class="mb-0 me-auto">Modification d'une offre</h3>
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
                            @dump($errors)
                            <form action="{{ route('offre.update', $offre)}}" method="post" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="titre" class="form-label">Titre 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('titre') is-invalid @enderror solid" name="titre" id="titre" placeholder="Titre offre" aria-label="name" value="{{ $offre->titre }}">
                                        @error('titre')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="type_offre_id" class="form-label">Type offre <span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <select class="form-control @error('type_offre_id') is-invalid @enderror solid"
                                            name="type_offre_id" id="type_offre_id">
                                            <option value="">Veuillez choisir un type d'offre</option>
                                            @foreach ($typeoffres as $key => $typeoffre)
                                                <option value="{{ $key }}" @selected($offre->type_offre_id == $key)>{{ $typeoffre }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_offre_id')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="departement_id" class="form-label">Département 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <select name="departement_id" id="departement_id" class="form-control @error('departement_id') is-invalid @enderror solid" aria-label="name">
                                            <option value="">Veuillez séléctionner un département</option>
                                            @foreach ($departements as $key => $departement)
                                                <option value="{{ $key }}" @selected($offre->departement_id == $key)>{{ $departement }}</option>
                                            @endforeach
                                        </select>
                                        @error('departement_id')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="domaine_id" class="form-label">Domaine 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <select name="domaine_id" id="domaine_id" class="form-control @error('domaine_id') is-invalid @enderror solid" aria-label="name">
                                            <option value="">Veuillez séléctionner un domaine</option>
                                            @foreach ($domaines as $key => $domaine)
                                                <option value="{{ $key }}" @selected($offre->domaine_id == $key)>{{ $domaine }}</option>
                                            @endforeach
                                        </select>
                                        @error('domaine_id')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="entreprise_id" class="form-label">Entreprise 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <select name="entreprise_id" id="entreprise_id" class="form-control @error('entreprise_id') is-invalid @enderror solid" aria-label="name">
                                            <option value="">Veuillez séléctionner une entreprise</option>
                                            @foreach ($entreprises as $key => $entreprise)
                                                <option value="{{ $key }}" @selected($offre->entreprise_id == $key)>{{ $entreprise }}</option>
                                            @endforeach
                                        </select>
                                        @error('entreprise_id')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="lieu" class="form-label">Lieu 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('lieu') is-invalid @enderror solid" name="lieu" id="lieu" placeholder="Lieu offre" aria-label="name" value="{{ $offre->lieu }}">
                                        @error('lieu')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="salaire" class="form-label">Salaire 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="number" class="form-control @error('salaire') is-invalid @enderror solid" name="salaire" id="salaire" placeholder="Salaire offre" aria-label="name" value="{{ $offre->salaire }}">
                                        @error('salaire')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="date_debut" class="form-label">Date début 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="date" class="form-control @error('date_debut') is-invalid @enderror solid" name="date_debut" id="date_debut" placeholder="Date début" aria-label="name" value="{{ $offre->date_debut }}">
                                        @error('date_debut')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="date_fin" class="form-label">Date fin 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="date" class="form-control @error('date_fin') is-invalid @enderror solid" name="date_fin" id="date_fin" placeholder="Nom offre" aria-label="name" value="{{$offre->date_fin }}">
                                        @error('date_fin')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="description" class="form-label">Description 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <textarea name="description" id="description"  class="form-control @error('description') is-invalid @enderror solid" placeholder="Description offre" aria-label="name">{{ $offre->description }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="contenu" class="form-label">Contenu 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <textarea name="contenu" id="contenu"  class="form-control @error('contenu') is-invalid @enderror solid" placeholder="Contenu offre" aria-label="name">{{ $offre->contenu }}</textarea>
                                        @error('contenu')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <div class="author-media">
                                            <img src=" {{asset('storage/'.$offre->photo)}}" width="70" height="70" class="img-fluid rounded-circle" alt="">
                                            <div class="upload-link" title="" data-bs-toggle="tooltip" data-placement="right"
                                                data-original-title="update">
                                                <input type="file" name="photo" class="update-flie">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-check form-switch col-xl-6  col-md-6 mb-4">
                                        <label for="etat" class="form-check-label">Etat</label>
                                        <input type="checkbox" class="form-control form-check-input" name="etat" id="etat" aria-label="name" role="switch" {{ $offre->etat ? 'checked' : '' }}>
                                    </div>

                                <div class="card-footer text-end">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </div>
                            </form>
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