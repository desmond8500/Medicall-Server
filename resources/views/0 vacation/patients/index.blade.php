@extends('0 vacation.layout')

@section('nav2')
    @include('0 vacation.component.patient-nav')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Bonjour Mme X</h3>
        </div>

        {{-- ===================================================================== --}}
        <div class="col-md-8">
            <h5>Nouvelles demandes</h5>
            @foreach ($demandes as $key => $demande)
            <div class="card mb-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                    {{ $demande->date }}<br>
                    <span class="text-secondary">{{ $demande->duree }}</span>
                    </div>
                    <div class="col-md-6">
                    {{ $demande->titre }} <br>
                    <span class="text-secondary">{{ $demande->description }}</span>
                    </div>
                    <div class="col-md-3">
                    <button type="button" class="btn btncolor" name="button">Confirmer</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

            <h5>Notifications</h5>
            @foreach ($notifications as $key => $notification)
            <div class="card mb-2">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <i class="fa fa-{{ $notification->icon }}"></i>
                    </div>
                    <div class="col-md-9">
                        {{ $notification->titre }} <br>
                        {{ $notification->description }}
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- ===================================================================== --}}
        <div class="col-md-4">
            <h5>Liens rapides</h5>
            <div class="card">
            <div class="card-body">
                <ul>
                <li>Prendre un rendez-vous</li>
                <li>Envoyer un message</li>
                <li>Résumé clinique</li>
                <li>Resultats de laboratoire</li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
