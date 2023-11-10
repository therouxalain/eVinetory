@extends('layouts/auth')
@section('title', 'Connexion')
@section('content')


    <form method="POST" action="{{ route('login') }}" class="container_auth_form">
        @csrf

        <!-- Email Address -->
        <div class="form_element">
            <x-input-label for="email" :value="__('Courriel')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <!-- Password -->
        <div class="form_element">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div>
            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __(' Mot de passe oublié?') }}
                </a>
            @endif
        </div>
        <x-primary-button class="button info">
            {{ __('Se connecter') }}
        </x-primary-button>
    </form>

@endsection