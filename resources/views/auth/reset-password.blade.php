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

                        <form method="POST" action="{{ route('password.store') }}" class="pt-3 needs-validation" novalidate>
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group input-group has-validation">
                                <input type="email" class="form-control form-control-lg initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" id="validationCustomEmail" name="email" value="{{ old('email') }}" required placeholder="E-mail" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím email.
                                </div>
                            </div>

                            <div class="form-group input-group has-validation">
                                <input type="password" class="form-control form-control-lg @if($errors->first('password')) is-invalid-custom @endif" id="validationCustomPassword" name="password" required placeholder="Password" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím heslo.
                                </div>
                            </div>

                            <div class="form-group input-group has-validation">
                                <input type="password" class="form-control form-control-lg @if($errors->first('password')) is-invalid-custom @endif" id="validationCustomConfirmPassword" name="password_confirmation" required placeholder="Confirm password" aria-describedby="inputGroupPrepend">
                                <div class="invalid-feedback">
                                    Zadejte prosím heslo.
                                </div>
                            </div>


                            @include('components.error_list')

                            @include('components.success-status')

                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                                    ZMĚNIT HESLO
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
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
