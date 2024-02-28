@extends('admin.master')

@section('title','Modification du mot de passe')

@section('content')
    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="https://jobick.dexignlab.com/cakephp/demo"><img class="logo-auth" src="../images/logo-full.png" alt=""></a>
                            </div>
                            <h4 class="text-center mb-4">Modification mot de passe</h4>
                            @include('admin.alerts.alert')
                            <form action="{{ route('editPassword.update', $admin) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-sm-4 mb-3 position-relative">
                                    <label class="form-label" for="dlab-password">Mot de passe actuel</label>
                                    <input type="password" id="dlab-password" class="form-control @error('password') is-invalid @enderror" name="password" required>
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

                                <div class="mb-sm-4 mb-3 position-relative">
                                    <label class="form-label" for="dlab-password1">Nouveau mot de passe</label>
                                    <input type="password" id="dlab-password1" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required>
                                    <span class="show-pass1 eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-sm-4 mb-3 position-relative">
                                    <label class="form-label" for="dlab-password2">Confirmer le mot de passe</label>
                                    <input type="password" id="dlab-password2" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" required>
                                    <span class="show-pass2 eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                                </div>

                            </form>
                            <div class="form-row d-flex flex-wrap justify-content-between mb-2 mt-2">
                                <div class="form-group ms-2">
                                    <a class="text-hover" href="page-forgot-password.html">Mot de passe oublié ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
	    </div>
    </div>
@endsection
