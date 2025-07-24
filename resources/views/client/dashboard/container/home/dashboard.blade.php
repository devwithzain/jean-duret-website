@extends('layouts.user')

@section('title', $title ?? 'Default Title')

@section('content')
  <div class="w-full h-screen flex flex-col gap-5">
    <div class="w-full grid grid-cols-3 gap-5">
    <div class="w-full h-40 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"></div>
    <div class="w-full h-40 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"></div>
    <div class="w-full h-40 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"></div>
    </div>
    <div class="w-full flex-1 grid grid-cols-2 gap-5">
    <div class="w-full h-full bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"></div>
    <div class="w-full h-full bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"></div>
    </div>
  </div>
@endsection