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
                @foreach ($posts as $post)
                    <div class="col-md-6  ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset($post->featured_image)}}');">
                            </a>
                            <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                            <div class="meta mb-2">
                                <div><a href="#">{{ $post->date }}</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <div class="text-wrap">
                                <p >{{ $post->summary }}</p>
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
                <h3>Catégories</h3>
                <div class="card ">
                    <div class="card-body">
                        <ul>
                        @foreach ($topics as $topic)
                            <li>{{ $topic->name }} </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
