@extends('health.landing.index.layout')

@section('content')
    <div class="container">
        <h3>Interface d'administration</h3>
        <div class="separation"></div>

        <div class="row">
            @foreach ($resume as $item)
                <div class="col-md-3">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $item['titre'] }} :
                                <b class="text-primary">{{ $item['nombre'] }}</b>
                            </h5>
                            <p class="card-text">{{$item['description'] }}</p>
                            <a href="{{ route('adminlist',[ 'categorie' => $item['route'] ]) }}" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
