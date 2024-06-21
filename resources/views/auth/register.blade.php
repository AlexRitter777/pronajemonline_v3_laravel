@extends('layouts.guest')

@section('auth-content')


            <div class="row see-content-on-background w-100 mx-0">
                <div class="auth-content-panel mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo d-flex align-items-center">
                            <img class="logo-image" src="{{ Vite::asset('resources/images/keys.png') }}" alt="logo">
                            <h2 class="ps-3 logo-title">{{ config('app.name') }}</h2>
                        </div>
                        <h4 class="text-uppercase text-center">{{ __('Register') }}</h4>
                        <form method="POST" action="{{ route('register') }}" class="pt-3 needs-validation" novalidate>
                            @csrf

                            <div class="form-group has-validation">
                                <input type="text" name="name" class="form-control form-control-sm initialColorValidation @if($errors->first('name')) is-invalid-custom @endif" value="{{ old('name') }}" placeholder="Jméno" required>
                                <div class="invalid-feedback">
                                    {{__('Enter your name.') }}
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="email" name="email" class="form-control form-control-sm initialColorValidation @if($errors->first('email')) is-invalid-custom @endif" id="" value="{{ old('email') }}" placeholder="E-mail" required>
                                <div class="invalid-feedback">
                                    {{__('Enter your email address.') }}
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="password" name="password" class="form-control form-control-sm initialColorValidation @if($errors->first('password')) is-invalid-custom @endif" id="" placeholder="Heslo" required>
                                <div class="invalid-feedback">
                                    {{__('Enter your password.') }}
                                </div>
                            </div>

                            <div class="form-group has-validation">
                                <input type="password" name="password_confirmation" class="form-control form-control-sm initialColorValidation  @if($errors->first('password')) is-invalid-custom @endif" placeholder="Heslo ještě jednou" required value="">
                                <div class="invalid-feedback">
                                    {{__('Enter your password again.') }}
                                </div>
                            </div>

                            @include('components.error_list')

                            @include('components.success-status')

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary btn-sm font-weight-medium text-uppercase">{{ __('Register') }}</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                {{ __('Already have an account?') }} <a href="{{ route('login') }}" class="text-primary">{{ __('Sign In') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



@endsection


