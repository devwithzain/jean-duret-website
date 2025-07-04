@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('container.contact.hero')
@include('container.contact.contact-info')
@include('container.contact.form')
@endsection