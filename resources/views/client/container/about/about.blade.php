@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.about.hero')
@include('container.about.funding')
@include('container.about.divine')
@include('container.about.choseus')
@endsection