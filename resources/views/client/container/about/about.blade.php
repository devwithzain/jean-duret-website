@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('client.container.about.hero')
@include('client.container.about.funding')
@include('client.container.about.divine')
@include('client.container.about.choseus')
@endsection