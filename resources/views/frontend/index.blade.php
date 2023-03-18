@extends('frontend.main_master')
@section('main')

@section('title')
Home | karaa kamaran
@endsection
    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->

  
            <!-- contact-area-end -->

@endsection