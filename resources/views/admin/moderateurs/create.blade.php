@extends('admin.master')

@section('title', 'Ajout d\'un moderateur')

<!--**********************************
    Content body start
***********************************-->
@section('content')	
    <div class="content-body " style="">
		<div class="container-fluid">
	        <div class="d-flex align-items-center mb-4">
            <h3 class="mb-0 me-auto">Nouveau moderateur</h3>
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
                        <form action="{{ route('moderateur.store')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-xl-6  col-md-6 mb-4">
                                    <label class="form-label" for="nom">Nom</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror solid" value="{{old('nom')}}" name="nom" placeholder="Entrer votre nom" id="nom" >
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-xl-6  col-md-6 mb-4">
                                    <label class="form-label" for="prenom">Prenom</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror solid" name="prenom" placeholder="Entrer votre prenom" id="prenom" value="{{old('prenom')}}">
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-xl-6  col-md-6 mb-4">
                                    <label class="form-label" for="adresse">Adresse</label>
                                    <input type="text" class="form-control @error('adresse') is-invalid @enderror solid" name="adresse" placeholder="Entrer votre adresse" id="adresse" value="{{old('adresse')}}">
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-xl-6  col-md-6 mb-4">
                                    <label class="form-label" for="telephone">Téléphone</label>
                                    <input type="phone" class="form-control @error('telephone') is-invalid @enderror solid" name="telephone" placeholder="hello@example.com" id="telephone" value="{{ old('telephone') }}">
                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror solid" name="email" placeholder="hello@example.com" id="email" value="{{old('email')}}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4 position-relative">
                                        <label class="form-label" for="dlab-password">Password</label>
                                        <input type="password" id="dlab-password" class="form-control @error('password') is-invalid @enderror solid" name="password">
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <div class="author-media">
                                            <img src="{{asset('storage/' . $admin->avatar)}}" alt="">
                                            <div class="upload-link" title="" data-bs-toggle="tooltip" data-placement="right"
                                                data-original-title="update">
                                                <input type="file" name="avatar" class="update-flie">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                    </div>
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
@endsection
<!--**********************************
    Content body end
***********************************-->