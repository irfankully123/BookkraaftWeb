<?php

use App\Http\Controllers\Dashboard\MailInboxController;
use App\Http\Controllers\Dashboard\AppUserController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\CustomerQueryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;


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

// Route::get('/link/storage',function (){
//   \Illuminate\Support\Facades\Artisan::call('storage:link');
//   return 'Storage has been linked';
// });

// Route::get('/seed',function (){
//   \Illuminate\Support\Facades\Artisan::call('db:seed');
//   return 'Seed Successfully';
// });

// Route::get('/config/clear',function (){
//   \Illuminate\Support\Facades\Artisan::call('config:clear');
//   return 'Config has been cleared';
// });

//Route::get('/', function () {
//    return View('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//})->name('home');

Route::view('/', 'home')
    ->name('home');
Route::view('/publishing', 'publishing')
    ->name('publishing');
Route::view('/editing', 'editing')
    ->name('editing');
Route::view('/ghostwriting','ghostwriting')
    ->name('ghostwriting');
Route::view('/about','about')
    ->name('about');
Route::view('/testimonials','testimonials')
    ->name('testimonials');
Route::view('/contact','contact')
    ->name('contact');

Route::post('customer/query',CustomerQueryController::class)
    ->name('customer.form');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('home', HomeController::class);
    Route::get('profile', function () {
        return Inertia::render('Profile');
    })->name('profile.index');
    Route::post('profile/update/{id}', ProfileController::class)
        ->name('profile.update');
    Route::resource('appuser', AppUserController::class);
    Route::post('appuser/{appuser}/edit', [AppUserController::class, 'update'])
        ->name('appuser.update');
    Route::post('appuser/{appuser}/assign', [AppUserController::class, 'assignPermission'])
        ->name('appuser.assign');
    Route::post('appuser/{appuser}/revoke', [AppUserController::class, 'revokePermission'])
        ->name('appuser.revoke');
    Route::get('inbox', [MailInboxController::class, 'index'])
        ->name('inbox.index');
    Route::get('inbox/{mail}',[MailInboxController::class,'show'])
        ->name('inbox.show');
    Route::delete('inbox/{mail}', [MailInboxController::class, 'destroy'])
        ->name('inbox.destroy');
});


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';
