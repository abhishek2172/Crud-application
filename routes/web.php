<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegController;

Route::get('/', function () {
    return view('registration.register');
});

Route::view('dash', 'registration.dashboard');

Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);

Route::get('items/filter/{status}', [ItemController::class, 'filter'])->name('items.filter');

Route::post('add', [RegController::class, 'add']);
Route::view('login', 'registration.login');
Route::post('login', [RegController::class, 'login']);
Route::get('catogory', function () {
    return view('categories.index');
});

Route::get('/search', [ItemController::class, 'search']);

Route::post('/deleteBulk', [ItemController::class, 'bulkDestroy']);

Route::get('/items/delete/{id}', [ItemController::class, 'destroy'])->name('items.delete');
