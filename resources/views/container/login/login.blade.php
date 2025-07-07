@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.login.form')
@endsectionn