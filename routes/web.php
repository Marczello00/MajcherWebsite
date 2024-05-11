<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResController;

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
/*Route::get(
    '/pricing',
    function () {
        return view('pages.pricing');
    }
);*/
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
        return response()->file(resource_path('json/workingHours.json'));
    }
);
Route::get(
    '/api/languages',
    function () {
        return response()->file(resource_path('json/langTable.json'));
    }
);
Route::get(
    '/regulations',
    function () {
        return view('pages.regulations');
    }
);
Route::get(
    '/api/photos/{id}',
    [PhotoController::class, 'show']
)->where('id', '[0-9]+');
Route::get(
    '/api/res/{id}',
    [ResController::class, 'sendIt']
)->where('id', '[0-9]+');
