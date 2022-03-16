@extends('layouts.app') @section('content')
<style>
    .mt-100 {
        margin-top: 100px;
    }
</style>
<div class="container-fluid mt-100">
    <div class="row row-cols-1 row-cols-lg-2 sign-in  ">
        <div class="col px-0 ">
            <div class="banner h-100"></div>
        </div>
        <div class="col  align-self-center">
            <div class="p-x-70 p-y-20">
                <h1 class="text-theme-primary text-uppercase mb-0 text-center fs-18 fw-bold">{{ __('Reset Password') }}</h1>
                <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif {{--
                <form method="POST" action="{{ route('password.email') }}" class="row g-3">
                    @csrf --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection