@extends('health.index')

@section('head')
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/contact.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/contact_responsive.css') !!}">
@endsection

@section('content')
  <div class="background_image" style="background-image:url({!! asset('health/images/contact.jpg') !!})"></div>

  @include('health.header')
  @include('health.content.banner',['title'=>'Contact'])
  {{-- @include('health.content.map) --}}
@endsection

@section('subcontent')
  @include('health.content.contact')
@endsection

@section('script')
  <script src="{!! asset('health/plugins/easing/easing.js') !!}"></script>
  <script src="{!! asset('health/plugins/parallax-js-master/parallax.min.js') !!}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script src="{!! asset('health/js/contact.js') !!}"></script>
@endsection
