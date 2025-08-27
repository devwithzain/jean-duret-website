@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('client.container.login.form')
@endsection