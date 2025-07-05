<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('container.home.home', ['title' => 'Divine Solution Funding']);
});

Route::get('/about', function () {
    return view('container.about.about', ['title' => 'About Us - Divine Solution Funding']);
});

Route::get('/services', function () {
    return view('container.services.services', ['title' => 'Services - Divine Solution Funding']);
});

Route::get('/services/service-detail', function () {
    return view('container.services-detail.service-detail', ['title' => 'Service Detail - Divine Solution Funding']);
});

Route::get('/contact', function () {
    return view('container.contact.contact', ['title' => 'Contact - Divine Solution Funding']);
});