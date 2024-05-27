<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacypolicyController;
use App\Http\Controllers\TermConditionController;
use Illuminate\Support\Facades\Route;

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

// In web.php or routes file
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // Redirect to the main domain or application URL
        return Redirect::away(config('app.url'));
    })->name('dashboard');
});
Route::get('/destination/{name}', [DestinationDetailController::class, 'showByName'])->name('destination.show');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/booking/{name}', [BookingController::class, 'show'])->name('booking.show');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/terms-condition', [TermConditionController::class, 'index'])->name('terms-condition.index');
Route::get('/privacy-policy', [PrivacypolicyController::class, 'index'])->name('privacy-policy.index');
