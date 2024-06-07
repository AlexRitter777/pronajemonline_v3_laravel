@extends('layouts.guest')

@section('auth-content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        {{--<div class="brand-logo">
                            <img src="../../assets/images/logo.svg" alt="logo">
                        </div>--}}
                        <h4 class="text-uppercase text-center">Zapomenuté heslo</h4>
                        {{--<h6 class="font-weight-light">Sign in to continue.</h6>--}}

                        <form method="POST" action="{{ route('password.email') }}" class="pt-3 needs-validation" novalidate>
                            @csrf

                            <div class="form-group input-group has-validation">
                                <input type="email" class="form-control form-control-lg initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" id="validationCustomEmail" name="email" value="{{ old('email') }}" required placeholder="E-mail" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím email.
                                </div>
                            </div>

                            @include('components.error_list')

                            @include('components.success-status')

                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                                    ODESLAT NA EMAIL
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection















{{--<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}


