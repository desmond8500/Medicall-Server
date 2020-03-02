@extends('health.landing.index.layout')

@section('content')
    @include('health.landing.content.carousel')
    <div class="separation"></div>
    @include('health.landing.content.calltoaction')
@endsection
