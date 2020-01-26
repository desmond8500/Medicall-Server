@extends('health.index')

@section('head')
  <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/animate.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('styles/news.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('styles/news_responsive.css') !!}">
@endsection

@section('content')
  <div class="background_image" style="background-image:url({!! asset($project->ProjectBackground[0]) !!})"></div>

  @include('health.header')
  @include('health.content.home',['home'=> $project->ProjectHomeContent[0]])
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
