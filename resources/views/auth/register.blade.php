@extends('layouts.app', ['styles' => ['auth/form']])

@section('title', 'Créer mon espace client')

@section('content')
<section class="row">
    <div class="offset-1 offset-md-2 offset-lg-3 offset-xl-4 col-10 col-md-8 col-lg-6 col-xl-4 content-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="title">
                <h1>nouveau compte</h1>
                <span>Créer un espace client</span>
            </div>
            <label for="email">Adresse e-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password">Mot de passe</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password">Confirmation mot de passe</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="btn-content">
                <button type="submit">Créer</button>
                <a href="{{ route('login') }}">J'ai déjà un compte</a>
            </div>
        </form>
    </div>
    <img alt="Wave" src="{{ asset('svg/wave.svg') }}" class="wave">
</section>
@endsection
