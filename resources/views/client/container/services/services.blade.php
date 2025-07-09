@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('client.container.services.hero')
@include('client.container.services.stats')
@include('client.container.services.consulting')
@endsection