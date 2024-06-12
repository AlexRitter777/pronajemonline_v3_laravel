@extends('layouts.guest')

@section('auth-content')
    <div class="row see-content-on-background w-100 mx-0">
        <div class="auth-content-panel col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <h4 class="text-center mb-3">{{ __('Thanks for signing up!') }}</h4>
                <p class="mb-4 font-weight-medium fs-6">
                    {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                </p>
                <p class="mb-4 font-weight-medium fs-6">
                    {{ __('If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success mb-4">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="d-flex justify-content-around align-items-center">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button type="submit" class="btn btn-primary btn-sm font-weight-medium text-uppercase" >
                                {{ __('Resend Email') }}
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-primary btn-sm font-weight-medium text-uppercase" >
                            {{ __('Log Out') }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection



