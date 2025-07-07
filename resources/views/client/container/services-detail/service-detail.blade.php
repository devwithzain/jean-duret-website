@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.services-detail.hero')
@include('container.services-detail.service')
@include('container.services-detail.consulting')
@endsection