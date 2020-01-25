@extends('health.index')

@section('content')
  <div class="background_image" style="background-image:url({!! asset($project->ProjectHomeContent[0]->image) !!})"></div>

  @include('health.header')
  @include('health.content.home',['home'=> $project->ProjectHomeContent[0]]);
@endsection

@section('subcontent')
  <!-- Info Boxes -->
  @include('health.content.infoBoxes')

  <!-- CTA -->
  @include('health.content.cta')

  <!-- Services -->
  @include('health.content.services')

  <!-- Departments -->
  @include('health.departement')

  <!-- FAQ & News -->
  @include('health.faq')
@endsection
