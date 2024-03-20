@extends('admin.master')

@section('title', 'Profile')

@section('header', 'Mon Profile')
        <!--**********************************
            Content body start
        ***********************************-->

@section('content')

<div class="content-body " style="">
    <div class="container-fluid">
        @include('admin.alerts.alert')
        <div class="row">
            <div class="col-xl-12">
                <div class="profile-back">
                    <img src="{{ asset('admin/images/profile1.jpg') }}" alt="">
                    <div class="social-btn">
                        <a href="{{ route('profile.edit', $admin) }}" class="btn btn-primary">Modifier</a>
                    </div>
                </div>
                <div class="profile-pic d-flex">
                    <img src="{{ empty($admin->avatar) ? asset('storage/avatars/AvatarMaker.png') : asset('storage/'.$admin->avatar) }}"
                    class=""  alt="">
                    <div class="profile-info2">
                        <h2 class="mb-0">{{ $admin->prenom}} {{ $admin->nom}}</h2>
                        <h4>{{ $admin->adresse }} | {{ $admin->telephone }}</h4>
                        <span class="d-block"><i class="fas fa-map-marker-alt me-2"></i>{{ $admin->adresse}}</span>
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
