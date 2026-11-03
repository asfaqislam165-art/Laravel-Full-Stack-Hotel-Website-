<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, AdminController, RoomController, FacilityController, BookingController, ProfileController};

/* Public Portal Routes */
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/rooms', [UserController::class, 'rooms'])->name('rooms');
Route::get('/facilities', [UserController::class, 'facilities'])->name('facilities');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/booking', [UserController::class, 'bookingForm'])->name('booking');
Route::post('/booking', [UserController::class, 'storeBooking'])->name('booking.store');

/* Guest Auth Dashboard */
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Restricted Admin Panel Routes */
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Rooms CRUD
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/add', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms/add', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('/rooms/edit/{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::get('/rooms/delete/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');

    // Facilities CRUD
    Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');
    Route::get('/facilities/add', [FacilityController::class, 'create'])->name('facilities.create');
    Route::post('/facilities/add', [FacilityController::class, 'store'])->name('facilities.store');
    Route::get('/facilities/edit/{id}', [FacilityController::class, 'edit'])->name('facilities.edit');
    Route::post('/facilities/edit/{id}', [FacilityController::class, 'update'])->name('facilities.update');
    Route::get('/facilities/delete/{id}', [FacilityController::class, 'destroy'])->name('facilities.destroy');

    // Bookings Management
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::post('/bookings/status/{id}', [BookingController::class, 'updateStatus'])->name('bookings.status');
    Route::get('/bookings/delete/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');
});

require __DIR__.'/auth.php';