@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.services.hero')
@include('container.services.stats')
@include('container.services.consulting')
@endsection