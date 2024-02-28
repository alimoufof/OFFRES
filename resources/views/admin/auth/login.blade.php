@extends('admin.base')

@section('title','Login')

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
            <h4 class="text-center mb-4">Connexion</h4>
            @include('admin.alerts.alert')
            <form action="{{ route('singIn') }}" method="post">
                @csrf
                @method('POST')
                <div class="form-group mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email"  placeholder="example@gmail.com" id="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-sm-4 mb-3 position-relative">
                    <label class="form-label" for="dlab-password">Mot de passe</label>
                    <input type="password" id="dlab-password" class="form-control" name="password">
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
                <div class="form-row d-flex flex-wrap justify-content-between mb-2">
                    <div class="form-group mb-sm-4 mb-1">
                        <div class="form-check custom-checkbox ms-1">
                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                            <label class="form-check-label" for="basic_checkbox_1">Se souvenir de moi</label>
                        </div>
                    </div>
                    <div class="form-group ms-2">
                        <a class="text-hover" href="page-forgot-password.html">Mot de passe oublié ?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Vous n'avez pas de compte ? <a class="text-primary" href="{{route('register.index')}}">S'inscrire</a></p>
            </div>
        </div>
    </div>
</div>		</div>
	</div>
</div>
@endsection
