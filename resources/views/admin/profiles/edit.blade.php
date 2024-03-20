@extends('admin.master')

@section('title', 'Edition d\'un profile')

@section('header', 'Edition d\'un Profile')

@section('content')
    <!--**********************************
                            Content body start
                    ***********************************-->

    <div class="content-body " style="">
        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4">
                <h3 class="mb-0 me-auto">Edition du Profile de l’Administrateur</h3>
                <div>
                    <a href="javascript:void(0);" class="icon-btn me-3"> <i class="fas fa-envelope"></i></a>
                    <a href="javascript:void(0);" class="icon-btn me-3"><i class="fas fa-phone-alt"></i></a>
                    <a href="javascript:void(0);" class="icon-btn"><i class="fas fa-info"></i></a>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="clearfix">
                        <div class="card card-bx author-profile m-b30">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="author-profile">
                                        <form action="{{ route('change.avatar', $admin) }}"
                                            enctype="multipart/form-data" method="post" id="imageForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="author-media">
                                                <img src="{{ empty($admin->avatar) ? asset('storage/avatars/AvatarMaker.png') : asset('storage/'.$admin->avatar) }}"
                                                class="img-fluid rounded-circle" width="100" height="100" alt="">                                                <div class="upload-link" title="" data-bs-toggle="tooltip"
                                                    data-placement="right" data-original-title="update">
                                                    <input type="file" class="update-file" name="avatar"
                                                        id="imageInput">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </div>
                                            <div class="author-info">
                                                <button class="btn btn-primary" type="submit">Modifier</button>
                                            </div>
                                        </form>
                                        <div class="author-info">
                                            <h6 class="title text-uppercase">{{ $admin->prenom }} {{ $admin->nom }}</h6>
                                            <span>{{ $admin->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="input-group mb-3">
                                    <div class="form-control rounded text-center">Portfolio</div>
                                </div>
                                <div class="input-group">
                                    <a target="_blank" href="https://www.dexignlab.com/"
                                        class="form-control text-primary rounded text-start ">https://www.dexignlab.com/</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card  card-bx m-b30">
                        <div class="card-header">
                            <h4 class="card-title">Edition du Compte de <strong class="text-uppercase">{{ $admin->prenom }}
                                    {{ $admin->nom }}</strong>
                            </h4>
                        </div>
                        <form action="{{ route('profile.update', $admin) }}" method="post"
                            class="profile-form needs-validation" novalidate>

                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label" for="nom">Nom</label>
                                        <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                            name="nom" id="nom" value="{{ $admin->nom }}">
                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label" for="prenom">Prénom</label>
                                        <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                                            name="prenom" id="prenom" value="{{ $admin->prenom }}">
                                        @error('prenom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input type="text" class="form-control @error('adresse') is-invalid @enderror"
                                            name="adresse" id="adresse" value="{{ $admin->adresse }}">
                                        @error('adresse')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label" for="telephone">Téléphone</label>
                                        <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                            name="telephone" id="telephone" value="{{ $admin->telephone }}">
                                        @error('telephone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label" for="email">E-mail</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="{{ $admin->email }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="{{ route('editPassword.edit', $admin) }}"
                                        class="text-primary btn-link text-end">Voulez-vous modifier votre mot de passe ?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                        Content body end
                    ***********************************-->

@endsection
