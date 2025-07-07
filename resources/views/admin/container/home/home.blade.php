@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
@include('admin.container.home.hero')
@endsection