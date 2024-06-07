@extends('layouts.guest')

@section('auth-content')

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth ">
            <div class="col-lg-6 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <h4 class="text-center mb-3">Děkujeme za registraci!</h4>
                    <p class="mb-4 font-weight-medium fs-6">
                         Než začnete, mohli byste prosím ověřit svou e-mailovou adresu kliknutím na odkaz, který jsme vám právě poslali?
                    </p>
                    <p class="mb-4 font-weight-medium fs-6">
                        Pokud jste e-mail neobdrželi, rádi vám pošleme další.
                    </p>
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success mb-4">
                            Nový ověřovací odkaz byl odeslán na e-mailovou adresu, kterou jste uvedli při registraci.
                        </div>
                    @endif
                    <div class="d-flex justify-content-around align-items-center">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <button type="submit" class="btn btn-block btn-primary font-weight-medium auth-form-btn text-wrap lh-xs-1" >
                                    Odeslat znovu
                                </button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-block btn-primary font-weight-medium auth-form-btn lh-xs-1" >
                                Odhlasit se
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


{{--<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>--}}
