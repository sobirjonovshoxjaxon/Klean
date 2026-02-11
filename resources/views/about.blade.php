<?php 
    $pageName = "About";

?>

@extends('components.main')
@section('content')


    <!-- Page Header Start -->
        @include('components.page-header')
    <!-- Page Header End -->


    <!-- About Start -->
        @include('components.about')
    <!-- About End -->


    <!-- Video Modal Start -->
        @include('components.video')
    <!-- Video Modal End -->


    <!-- Features Start -->
        @include('components.features')
    <!-- Features End -->


    <!-- Team Start -->
        @include('components.team')
    <!-- Team End -->

@endsection
    