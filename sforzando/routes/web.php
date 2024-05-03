<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('admin', function () {
    return view('admin_dashboard');
});

Route::get('admin/modify', function () {
    return view('admin_dashboard_modify');
});