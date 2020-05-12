@extends('0 vacation.layout')

@section('link')

@endsection

@section('nav2')
    @include('0 vacation.component.admin-nav')
@endsection

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($resumes as $resume)
                <div class="col-md-3">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $resume['titre'] }} :
                                <b class="text-primary">{{ $resume['nombre'] }}</b>
                            </h5>
                            <p class="card-text">{{$resume['description'] }}</p>
                            <a href="{{ route($resume['route']) }}" class="btn btn-primary">Consulter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <hr>
@endsection

@section('script')

@endsection
