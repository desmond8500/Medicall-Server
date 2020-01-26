@extends('health.index')

@section('head')
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/animate.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/services.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/services_responsive.css') !!}">
@endsection

@section('content')
  <div class="background_image" style="background-image:url({!! asset('health/images/services.jpg') !!})"></div>

  @include('health.header')
  @include('health.content.banner',['title'=> 'Services'])
@endsection


@section('subcontent')
  {{-- <!-- Info Boxes -->
  @include('health.content.infoBoxes')

  <!-- CTA -->
  @include('health.content.cta')

  <!-- Services -->
  @include('health.content.services')

  <!-- Departments -->
  @include('health.departement')

  <!-- FAQ & News -->
  @include('health.faq') --}}
@endsection

@section('script')
  <script src="{!! asset('health/plugins/greensock/TweenMax.min.js') !!}"></script>
  <script src="{!! asset('health/plugins/greensock/TimelineMax.min.js') !!}"></script>
  <script src="{!! asset('health/plugins/scrollmagic/ScrollMagic.min.js') !!}"></script>
  <script src="{!! asset('health/plugins/greensock/animation.gsap.min.js') !!}"></script>
  <script src="{!! asset('health/plugins/greensock/ScrollToPlugin.min.js') !!}"></script>
  <script src="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
  <script src="{!! asset('health/plugins/easing/easing.js') !!}"></script>
  <script src="{!! asset('health/plugins/parallax-js-master/parallax.min.js') !!}"></script>
  <script src="{!! asset('health/js/services.js') !!}"></script>
@endsection
