<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::prefix('product')->group(function () {
    Route::get('/{params}', function (string $params) {
        return view('product', [
            'params' => $params
        ]);
    });
});

Route::get('/news/{params}', function (string $params) {
    return view('news', [
        'params' => $params
    ]);
});

Route::prefix('program')->group(function () {
    Route::get('/{params}', function (string $params) {
        return view('program', [
            'params' => $params
        ]);
    });
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('contact-us', ContactController::class)->only(['index', 'store']);
