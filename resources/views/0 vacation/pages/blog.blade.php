@extends('0 vacation.layout')

@section('link')

@endsection

@section('link')
    <style>
        .blog_body{
            display: block;
            height: 150px;
        }
    </style>
@endsection

@section('content')
    @include('0 vacation.section.call_to_action2',['title'=>'Medi-Blog' , 'image'=>'src/images/wallpaper/services.jpg'])

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row d-flex">
                    <div class="col-md-12">
                        <h3 class="ml-3">Nos Articles</h3>
                    </div>
                    @foreach ($posts as $post)
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <img src="{{ $post->featured_image }}" class=" rounded mx-auto d-block" height="150px" alt="{{ $post->featured_image }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text blog_body")">{{ $post->summary }}</p>
                                    <a href="{{route('blogpage',['id'=>$post->id])}}" class="btn btn-primary">Consulter</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            {{ $posts->links() }}
                        </div>
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
