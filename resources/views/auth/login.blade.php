@extends('layouts.guest')

@section('auth-content')
            <div class="row see-content-on-background w-100 mx-0">
                <div class="auth-content-panel mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo d-flex align-items-center">
                            <img class="logo-image" src="{{ Vite::asset('resources/images/keys.png') }}" alt="logo">
                            <h2 class="ps-3 logo-title">Pronajemonline.cz</h2>
                        </div>
                        <h4 class="text-uppercase text-center">Přihlášení</h4>

                        <form method="POST" action="{{ route('login') }}" class="pt-3 needs-validation" novalidate>
                            @csrf

                             <div class="form-group input-group has-validation">
                                <input type="email" class="form-control form-control-sm initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" id="validationCustomEmail" name="email" value="{{ old('email') }}" required placeholder="E-mail" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím email.
                                </div>
                            </div>

                            <div class="form-group input-group has-validation">
                                <input type="password" class="form-control form-control-sm @if($errors->first('password')) is-invalid-custom @endif" id="validationCustomPassword" name="password" required placeholder="Heslo" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím heslo.
                                </div>
                            </div>

                            @include('components.error_list')

                            @include('components.success-status')


                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary btn-sm font-weight-medium" >
                                    PŘIHLÁSIT SE
                                </button>
                            </div>

                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                                        Zůstat přihlášen
                                        <i class="input-helper"></i></label>
                                </div>
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Zapomněl jsem heslo</a>
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                <a href="{{ route('register') }}" class="text-primary">Chci se registrovat</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection


{{--<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
