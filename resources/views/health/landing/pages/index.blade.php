@extends('health.landing.index.layout')

<style>
    .contactbloc{
        background-color: #2BABE3;
        color: white;
        padding-top: 20px;
    }
</style>


@section('content')
    @include('health.landing.content.carousel')
    <div class="separation"></div>
    @include('health.landing.content.calltoaction')
    <div class="separation"></div>
    @include('health.landing.content.services')
    <div class="contactbloc">
        @include('health.landing.content.contact')
    </div>
@endsection
