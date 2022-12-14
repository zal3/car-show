<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Car\Main as CarMain,
    Contact\Main as Contact,
    Rental\Main as Rental,
    Profile\Main as Profile,
};
use App\Http\Livewire\Pages\Car\{
    Admin\Add as CarAdd,
    Admin\Edit as CarEdit,
    CarPage as CarPage,
    Archive as ArchiveCar,

};
use App\Http\Livewire\Pages\Rental\{
    Vailable as AvailableRental,
    Unvailable as UnvailableRental,
    Control as ControlRental,

};
use App\Http\Livewire\Pages\Contact\{
    Info as ContactInfo,
};
use App\Http\Livewire\Pages\Admins\{
    main as Admins,
    Add as AdminAdd,
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
//register

//car
Route::get('/car', CarMain::class)->name('car');
Route::get('/car-page/{car_id}', CarPage::class)->name('car-page');

//contact
Route::get('/contact', Contact::class)->name('contact');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware(['admin'])->group(function () {

        // cars
        Route::middleware(['superAdmin'])->group(function () {
            Route::get('/add-car', CarAdd::class)->name('add-car');
            Route::get('/edit-car/{car_id}', CarEdit::class)->name('edit-car');
        });
        Route::get('/archive', ArchiveCar::class)->name('archive');
        Route::get('/control', ControlRental::class)->name('control');
        Route::get('/contact-info', ContactInfo::class)->name('contact-info');
        // end cars
        // admins
        Route::get('/admins', Admins::class)->name('admins');
        Route::get('/add-admin', AdminAdd::class)->name('addadmin');
        // end admins


    });
    //Profile

    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/rental', Rental::class)->name('rental');
    Route::get('/available', AvailableRental::class)->name('available-rental');
Route::get('/unavailable', UnvailableRental::class)->name('unavailable-rental');

    // donate
    // Route::get('/donate', Donate::class)->name('donate');


});