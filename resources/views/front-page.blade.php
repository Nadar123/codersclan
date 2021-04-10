{{-- Template Name: HomePage Template --}}

@extends('layouts.app')

  @section('content')

  <div class="front-page main-warpper">
    @include('frontpage.top-section')
    @include('frontpage.main-section')
    @include('frontpage.icons-section')
  </div>

@endsection