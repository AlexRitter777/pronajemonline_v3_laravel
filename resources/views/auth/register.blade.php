@extends('layouts.guest')

@section('auth-content')

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-6 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        {{--<div class="brand-logo">
                            <img src="../../images/logo.svg" alt="logo">
                        </div>--}}
                        <h4 class="text-uppercase text-center">Registrace</h4>
                        <form method="POST" action="{{ route('register') }}" class="pt-3 needs-validation" novalidate>
                            @csrf

                            <div class="form-group has-validation">
                                <input type="text" name="name" class="form-control form-control-lg initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" value="{{ old('name') }}" placeholder="Jméno" required>
                                <div class="invalid-feedback">
                                    Zadejte prosím jméno.
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="email" name="email" class="form-control form-control-lg initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" id="" value="{{ old('email') }}" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Zadejte prosím email.
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="password" name="password" class="form-control form-control-lg initialColorValidation" id="" placeholder="Heslo" required>
                                <div class="invalid-feedback">
                                    Zadejte prosím heslo.
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg initialColorValidation" placeholder="Heslo ještě jednou" required value="">
                                <div class="invalid-feedback">
                                    Zadejte prosím heslo ještě jednou.
                                </div>
                            </div>

                            @include('components.error_list')

                            @include('components.success-status')

                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">REGISTRACE</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Už máte účet? <a href="{{ route('login') }}" class="text-primary">Přihlasit se</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection


{{--<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
