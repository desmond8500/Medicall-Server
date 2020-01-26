@extends('health.index')

@section('head')
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/plugins/OwlCarousel2-2.2.1/animate.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/about.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('health/styles/about_responsive.css') !!}">
@endsection

@section('content')
  <div class="background_image" style="background-image:url({!! asset('health/images/about.jpg') !!})"></div>

  @include('health.header')
  @include('health.content.banner',['title'=> 'A propos'])
@endsection


@section('subcontent')
  @include('health.content.about',[
    'title'=>'Quelques mots à propos de nous',
    'subtitle'=>'---'
  ])
  @include('health.content.milestones')

  @include('health.content.team',[
    'title'=>'Notre Equipe',
    'subtitle'=>'---',
    'team'=> $team->Equipes
  ])
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
  <script src="{!! asset('health/js/about.js') !!}"></script>
@endsection
