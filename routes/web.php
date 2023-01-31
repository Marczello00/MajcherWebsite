<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return view('pages.home');
    }
);
Route::get(
    '/queue',
    function () {
        return view('pages.queue');
    }
);
Route::get(
    '/pricing',
    function () {
        return view('pages.pricing');
    }
);
Route::get(
    '/contact',
    function () {
        return view('pages.contact');
    }
);
Route::get(
    '/privacy',
    function () {
        return view('pages.privacy');
    }
);
Route::get(
    '/gallery',
    function () {
        return view('pages.gallery');
    }
);
Route::get(
    '/api/workingHours',
    function () {
        return response()->file(resource_path('json\workingHours.json'));
    }
);
