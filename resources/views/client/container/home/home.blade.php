@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.home.hero')
@include('container.home.stats')
@include('container.home.consulting')
@include('container.home.choseus')
@include('container.home.investment')
@include('container.home.about')
@include('container.home.testimonials')
@endsection