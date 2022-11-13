<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Car\Main as CarMain,
    Contact\Main as Contact,
    Rental\Main as Rental,
};
use App\Http\Livewire\Pages\Car\{
    Admin\Add as CarAdd,
    // Admin\Edit as CarEdit,
    // CarPage as CarPage,

};
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
//home
Route::get('/', Home::class)->name('home');

//about
Route::get('/about', About::class)->name('about');

//car
Route::get('/car', CarMain::class)->name('car');
// Route::get('/car-page', CarPage::class)->name('car-page');
Route::get('/add-car', CarAdd::class)->name('add-car');




//contact
Route::get('/contact', Contact::class)->name('contact');

//rental
Route::get('/rental', Rental::class)->name('rental');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });
