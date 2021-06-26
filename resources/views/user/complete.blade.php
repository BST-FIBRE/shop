@extends('layouts.app', ['styles' => ['auth/form']])

@section('content')
<section class="row">
    <div class="offset-1 offset-md-2 offset-lg-3 offset-xl-4 col-10 col-md-8 col-lg-6 col-xl-4 content-form">
        <form method="POST" action="{{ route('user.update') }}">
            @csrf
            <div class="title">
                <h1>Finaliser mon profil</h1>
                <span>Veuillez compléter ces informations pour finaliser votre inscription</span>
            </div>
            <label for="firstname">Prénom</label>
            <input id="firstname" type="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
            @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="lastname">Nom</label>
            <input id="lastname" type="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="phone">Numéro de téléphone</label>
            <input id="phone" type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="+33 " required autocomplete="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="btn-content">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
    <img alt="Wave" src="{{ asset('svg/wave.svg') }}" class="wave">
</section>
<script>
</script>
@endsection
