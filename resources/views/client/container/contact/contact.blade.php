@extends('layouts.app')

@section('title', $title ?? 'Default Title')

@section('content')
@include('client.container.contact.hero')
@include('client.container.contact.contact-info')
@include('client.container.contact.form')
@endsection