@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        @if (session('message'))
            <h4 class="alert alert-success">{{ session('message') }}</h4>
        @endif
        @if (session('messageadmin'))
            <h4 class="alert alert-success">{{ session('messageadmin') }}</h4>
        @endif
        <div class="row">

            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <a href="{{ route('categories') }}">
                                {{ __('language.CATEGORIES') }}
                            </a>
                            <i class="fa-solid fa-book-medical fa-2xl"></i>
                        </div>
                    </div>
                    <div class="card-body text-center ">
                        {{ $countcate }}

                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <a href="{{ route('post') }}">
                                {{ __('language.POSTS') }}
                            </a>
                            <i class="fa-solid fa-user-doctor fa-2xl"></i>
                        </div>
                    </div>
                </div>

            </div>
            @if (Auth::user() && Auth::user()->role == 'admin')
                <div class="col-md-4 mt-5 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a>
                                    {{ __('language.USERS') }}
                                </a>
                                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            {{ $countusers }}
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endif

    </div>
@endsection
