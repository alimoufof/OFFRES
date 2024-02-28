@extends('admin.master')

@section('title', 'Ajout d\'une entreprise')

@section('header', 'Création d\'une Entreprise')

<!--**********************************
    Content body start
***********************************-->
@section('content')	
    <div class="content-body " style="">
		<div class="container-fluid">
	        <div class="d-flex align-items-center mb-4">
		        <h3 class="mb-0 me-auto">Nouvelle entreprise</h3>
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
                            <form action="{{ route('entreprise.store')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="nom_entreprise" class="form-label">Entreprise 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('nom_entreprise') is-invalid @enderror solid" name="nom_entreprise" id="nom_entreprise" placeholder="Nom entreprise" aria-label="name" value="{{ old('nom_entreprise') }}">
                                        @error('nom_entreprise')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="adresse" class="form-label">Adresse 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('adresse') is-invalid @enderror solid" name="adresse" id="adresse" placeholder="Nom entreprise" aria-label="name" value="{{ old('adresse') }}">
                                        @error('adresse')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="contact" class="form-label">Contact 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="tel" class="form-control @error('contact') is-invalid @enderror solid" name="contact" id="contact" placeholder="Nom entreprise" aria-label="name" value="{{ old('contact') }}">
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="email" class="form-label">Email 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror solid" name="email" id="email" placeholder="Nom entreprise" aria-label="name" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="site_web" class="form-label">Site web 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('site_web') is-invalid @enderror solid" name="site_web" id="site_web" placeholder="Nom entreprise" aria-label="name" value="{{ old('site_web') }}">
                                        @error('site_web')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                     <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="description" class="form-label">Entreprise 
                                            <span class="text-danger scale5 ms-2">*</span>
                                        </label>
                                        <textarea name="description" id="description" cols="30" rows="10" aria-label="name" class="form-control @error('description') is-invalid @enderror solid" >{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <div class="author-media">
                                            <img src="{{asset('storage/' . $entreprise->logo)}}" alt="">
                                            <div class="upload-link" title="" data-bs-toggle="tooltip" data-placement="right"
                                                data-original-title="update">
                                                <input type="file" name="logo" class="update-flie">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label for="secteurs" class="form-label">Secteur</label>
                                        <select name="secteurs[]" multiple id="secteurs" class="form-check-select @error('secteurs') is-invalid @enderror solid">
                                            @foreach($secteurs as $key => $secteur)
                                              <option value="{{ $key }}">{{ $secteur }}</option>
                                            @endforeach
                                        </select>                  
                                        @error('secteurs')
                                          <div class="invalid-feedback">
                                              {{ $message }}
                                          </div>
                                        @enderror
                                      </div>

                                     {{-- <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Tagging with multi-value select boxes</h4>
                        <p>Tagging can also be used in multi-value select boxes. In the example below, we set the
                            <code>multiple="multiple"</code> attribute on a Select2 control that also has
                            <code>tags: true</code> enabled:</p>
                    </div>

                    <select id="multi-value-select" style="width:100%;" multiple="multiple">
                        <option selected="selected">orange</option>
                        <option>white</option>
                        <option selected="selected">purple</option>
                    </select>
                </div>
            </div>
        </div> --}}
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