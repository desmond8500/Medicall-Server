@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
    @include('0 vacation.section.call_to_action2',['title'=>'Medi-Blog' , 'image'=>'src/images/wallpaper/services.jpg'])

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row d-flex">
                    <h3 class="ml-3">Nos Articles</h3>
                    @foreach ($posts as $post)
                    <div class="col-md-12  ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset($post->featured_image)}}" alt="{{asset($post->featured_image)}}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="heading"><a href="{{route('blogpage',['id'=>$post->id])}}">{{ $post->title }}</a></h3>
                                    <div class="text-wrap">
                                        <p>{{ $post->summary }}</p>
                                        <a href="{{route('blogpage',['id'=>$post->id])}}" class="btn btn-primary">Consulter</a>
                                    </div>
                                </div>
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
