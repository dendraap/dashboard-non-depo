<?php

use App\Http\Controllers\PaymentControllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function(){
    return view('payment.bongkar_data');
});

Route::get('/tes2', function(){
    return view('payment.bongkar_data2');
});


// Route::post('/payment', [PaymentControllers::class, "paymentJson"])->name('payment.json');
Route::get('/payment', [PaymentControllers::class, "payment"])->name('payment');
Route::post('/payment', [PaymentControllers::class, "paymentJSON"])->name('paymentJSON');
// Route::post('/payment', [PaymentControllers::class, "truckingJSON"])->name('truckingJSON');




// Route::any('/payment', [PaymentControllers::class, "payment"])->name('payment');
// Route::any('/payment', [PaymentControllers::class, "payment"])->name('payment');
// Route::any('/payment', [PaymentControllers::class, "payment"])->name('payment');
// Route::post('/payment', [PaymentControllers::class, "lolo"])->name('lolo');
// Route::match(['get', 'post'],'/payment', [PaymentControllers::class, "payment"])->name('payment');
Route::get ('/lolo', [PaymentControllers::class, "show"]);



Route::get('/film', function() {
    return view('film.index');
});
