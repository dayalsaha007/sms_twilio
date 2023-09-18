<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsControlller;


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
    return view('welcome');
});


Route::controller(SmsControlller::class)->group(function(){
    Route::get('/sms', 'sms');
    Route::post('/send/sms', 'send_sms')->name('send.sms');
});
