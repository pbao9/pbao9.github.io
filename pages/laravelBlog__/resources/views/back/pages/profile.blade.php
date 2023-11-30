@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Hồ sơ')

@section('content')
    @livewire('author-profile-header')
    <hr>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-details" class="nav-link active" data-bs-toggle="tab">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-password" class="nav-link" data-bs-toggle="tab">Bảo mật</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-details">
                        @livewire('author-personal-details')
                    </div>
                    <div class="tab-pane" id="tabs-password">
                        @livewire('author-change-password-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
