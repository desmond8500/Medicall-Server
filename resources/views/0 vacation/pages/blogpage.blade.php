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
                        {{ $post->body }}
                    </div>
                </div>
                <div>
                    @comments(['model' => $post])
                </div>
            </div>
            <div class="col-md-4">
                <h3>Catégories</h3>
                <div class="card ">
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="{{route('blog')}} ">Tous</a>
                            </li>
                            @foreach ($topics as $topic)
                            <li>
                                <a href="{{route('blog',['topic'=>$topic->id])}} ">{{ $topic->name }}</a>
                            </li>
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
