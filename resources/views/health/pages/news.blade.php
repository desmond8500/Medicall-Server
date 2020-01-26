@extends('health.index')

@section('head')
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/animate.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/news.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/news_responsive.css') !!}">
@endsection

@section('content')
  <div class="background_image" style="background-image:url({!! asset('health/images/news.jpg') !!})"></div>

  @include('health.header')
  @include('health.content.banner',['title'=> 'Informations'])
@endsection


@section('subcontent')
  @include('health.content.news')

@endsection

@section('script')
  <script src="{!! asset('plugins/greensock/TweenMax.min.js') !!}"></script>
  <script src="{!! asset('plugins/greensock/TimelineMax.min.js') !!}"></script>
  <script src="{!! asset('plugins/scrollmagic/ScrollMagic.min.js') !!}"></script>
  <script src="{!! asset('plugins/greensock/animation.gsap.min.js') !!}"></script>
  <script src="{!! asset('plugins/greensock/ScrollToPlugin.min.js') !!}"></script>
  <script src="{!! asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
  <script src="{!! asset('plugins/easing/easing.js') !!}"></script>
  <script src="{!! asset('plugins/parallax-js-master/parallax.min.js') !!}"></script>
  <script src="{!! asset('js/news.js') !!}"></script>
@endsection
