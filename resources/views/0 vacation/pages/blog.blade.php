@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
    @include('0 vacation.section.call_to_action2',['title'=>'Medi-Blog' , 'image'=>'src/images/wallpaper/services.jpg'])
    {{-- @include('0 vacation.section.services',[$services]) --}}
    {{-- @include('0 vacation.section.room') --}}
    {{-- @include('0 vacation.section.feedback') --}}
    {{-- @include('0 vacation.section.offer',[$offers])
    @include('0 vacation.section.banner')
    @include('0 vacation.section.bloglist',[$posts]) --}}
@endsection

@section('script')

@endsection
