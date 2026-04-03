<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/users', function () {
    return view('pages.users');
});

Route::get('/orders', function () {
    return view('pages.orders');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/reports', function () {
    return view('pages.reports');
});

Route::get('/settings', function () {
    return view('pages.settings');
});

Route::get('/logout', function () {
    return redirect('/');
});