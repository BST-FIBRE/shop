@extends('layouts.app', ['styles' => ['auth/form']])

@section('title', 'Accéder à mon espace')

@section('content')
<section class="row">
    <div class="offset-1 offset-md-2 offset-lg-3 offset-xl-4 col-10 col-md-8 col-lg-6 col-xl-4 content-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="title">
                <h1>mon compte</h1>
                <span>Me connecter à mon espace</span>
            </div>
            <label for="email">Adresse e-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password">Mot de passe</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="btn-content">
                <button type="submit">Accéder</button>
                <a href="{{ route('register') }}">Je n'ai pas de compte</a>
            </div>
        </form>
    </div>
    <img alt="Wave" src="{{ asset('svg/wave.svg') }}" class="wave">
</section>
@endsection
