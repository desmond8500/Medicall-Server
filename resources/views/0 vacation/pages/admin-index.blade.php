@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
{{-- @include('0 vacation.section.call_to_action2',['title'=>'Admin' , 'image'=>'src/images/wallpaper/services.jpg']) --}}
    <section class="container">
        <h1>Admin index</h1>
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

    </section>
@endsection

@section('script')

@endsection
