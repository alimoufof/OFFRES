@extends('admin.master')

@section('title', "Modifier un secteur")

@section('header', "Edition d'un secteur")

<!--**********************************
    Content body start
***********************************-->
@section('content')
    <div class="content-body " style="">
        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4">
                <h3 class="mb-0 me-auto">Modification d'un secteur</h3>
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
                            <form action="{{ route('secteur.update', $secteur) }}" method="post">

                                @csrf
                                @method('PUT')
                                <div class="row">

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="nom_secteur" class="form-label">secteur <span
                                                class="text-danger scale5 ms-2">*</span></label>
                                        <input type="text"
                                            class="form-control @error('nom_secteur') is-invalid @enderror solid"
                                            name="nom_secteur" id="nom_secteur" placeholder="Nom secteur"
                                            aria-label="name" value="{{ $secteur->nom_secteur }}">
                                        @error('nom_secteur')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
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
    </div>
@endsection
<!--**********************************
    Content body end
***********************************-->
