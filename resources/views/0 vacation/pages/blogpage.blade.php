@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
    @include('0 vacation.section.call_to_action2',['title'=>'Medi-Blog' , 'image'=>'src/images/wallpaper/services.jpg'])

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="ml-3">{{ $post->title }}</h3>
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $post->featured_image }}" alt="{{ $post->featured_image }}" height="150px" class="rounded mx-auto d-block mb-4" >
                        {{ $post->summary }}
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                @include('0 vacation.component.categorie')
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
