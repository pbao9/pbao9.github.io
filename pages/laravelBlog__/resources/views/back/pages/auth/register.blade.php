@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Đăng ký')

@section('content')

    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.ico" height="36"
                        alt=""></a>
            </div>
            @livewire('author-register-form')
        </div>
    </div>

@endsection
