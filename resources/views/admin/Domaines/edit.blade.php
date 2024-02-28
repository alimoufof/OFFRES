@extends('admin.master')

@section('title', 'Modifier un domaine')

@section('header','Edition d\'un Domaine')

<!--**********************************
    Content body start
***********************************-->
@section('content')
    <div class="content-body " style="">
        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4">
                <h3 class="mb-0 me-auto">Modification d'un domaine</h3>
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
                            <form action="{{ route('domaine.update', $domaine)}}" method="post">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="departement_id" class="form-label">Département <span class="text-danger scale5 ms-2">*</span></label>
                                        <select class="form-control @error('departement_id') is-invalid @enderror solid" name="departement_id" id="departement_id">
                                            <option value="">Veuillez choisir un département</option>
                                            @foreach ($departements as $key => $departement )
                                                <option value="{{ $key }}" @selected($domaine->departement_id === $key)>{{ $departement }}</option>
                                            @endforeach
                                        </select>
                                        @error('departement_id')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="nom_domaine" class="form-label">domaine <span class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text" class="form-control @error('nom_domaine') is-invalid @enderror solid" name="nom_domaine" id="nom_domaine" placeholder="Nom domaine" aria-label="name" value="{{ $domaine->nom_domaine }}">
                                        @error('nom_domaine')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                </div>
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
@endsection
<!--**********************************
    Content body end
***********************************-->