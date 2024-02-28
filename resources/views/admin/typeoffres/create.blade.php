@extends('admin.master')

@section('title', "Ajout d'un Type d'offre")

@section('header',"Ajout d'un Type d'offre")

<!--**********************************
    Content body start
***********************************-->
@section('content')
<div class="content-body " style="">
    <div class="container-fluid">
        <div class="d-flex align-items-center mb-4">
            <h3 class="mb-0 me-auto">Nouveau type offre</h3>
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
                        <form action="{{ route('typeoffre.store') }}" method="post">

                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-xl-6  col-md-6 mb-4">
                                    <label for="nom_typeoffre" class="form-label">type offre <span
                                            class="text-danger scale5 ms-2">*</span></label>
                                    <input type="text" class="form-control @error('nom_typeoffre') is-invalid @enderror solid" name="nom_typeoffre" id="nom_typeoffre" placeholder="Nom typeoffre" aria-label="name" value="{{ old('nom_typeoffre') }}">
                                    @error('nom_typeoffre')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
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