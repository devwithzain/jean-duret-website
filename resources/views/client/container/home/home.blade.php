@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('client.container.home.hero')
@include('client.container.home.stats')
@include('client.container.home.consulting')
@include('client.container.home.choseus')
@include('client.container.home.investment')
@include('client.container.home.about')
@include('client.container.home.testimonials')
@endsection