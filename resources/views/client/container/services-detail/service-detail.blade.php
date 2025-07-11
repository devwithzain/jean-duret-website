@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
   @include('client.container.services-detail.hero')
   @include('client.container.services-detail.service')
   @include('client.container.services-detail.consulting')
@endsection