@extends('admin.base')

@section('title','Register')

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
            <h4 class="text-center mb-4">Création de compte</h4>
            <form action="{{ route('register.store')}}" method="post">
                @csrf
                @method('POST')

                <div class="form-group mb-4">
                    <label class="form-label" for="nom">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" name="nom" placeholder="Entrer votre nom" id="nom" >
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                
                <div class="form-group mb-4">
                    <label class="form-label" for="prenom">Prenom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" placeholder="Entrer votre prenom" id="prenom" value="{{old('prenom')}}">
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="form-label" for="adresse">Adresse</label>
                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" placeholder="Entrer votre adresse" id="adresse" value="{{old('adresse')}}">
                    @error('adresse')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label class="form-label" for="telephone">Téléphone</label>
                    <input type="phone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" placeholder="hello@example.com" id="telephone" value="{{ old('telephone') }}">
                    @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="hello@example.com" id="email" value="{{old('email')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-sm-4 mb-3 position-relative">
                        <label class="form-label" for="dlab-password">Password</label>
                        <input type="password" id="dlab-password" class="form-control @error('password') is-invalid @enderror" name="password">
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
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Avez-vous déjà un compte ? <a class="text-primary" href="{{route('login')}}">Connexion</a></p>
            </div>
        </div>
    </div>
</div>		</div>
	</div>
</div>
@endsection