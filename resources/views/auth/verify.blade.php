@extends('layouts.app', ['styles' => ['auth/form']])

@section('content')
<section class="row">
    <div class="offset-1 offset-md-2 offset-lg-3 offset-xl-4 col-10 col-md-8 col-lg-6 col-xl-4 content-form">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="title">
                <h1>Validation d'email</h1>
                <span>Veuillez confirmer votre adresse e-mail</span>
            </div>
            <div class="btn-content verify">
                <button type="submit">Envoyer un e-mail de confirmation</button>.
            </div>
        </form>
    </div>
    <img alt="Wave" src="{{ asset('svg/wave.svg') }}" class="wave">
</section>
@endsection
{{-- @extends('layouts.app')

@section('content')
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
@endsection --}}
