<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\EventsController;


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


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('*', [UserController::class, 'errorPage'])->name('errorPage');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/event', [UserController::class, 'event'])->name('event');
Route::get('/singleEvent', [UserController::class, 'singleEvent'])->name('singleEvent');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
Route::get('/orderConfirmation', [UserController::class, 'orderConfirmation'])->name('orderConfirmation');



Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->
middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); 
    Route::get('/profile-deactivate', [ProfileController::class, 'deactivate'])->name('deactivate'); 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Category Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/showCategory', [CategoryController::class, 'showCategory'])->name('showCategory');
    Route::get('/createCategory', [CategoryController::class, 'createCategory'])->name('createCategory');
    Route::get('/editCategory', [CategoryController::class, 'editCategory'])->name('editCategory');
    Route::put('/updateCategory', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::post('/storeCategory', [CategoryController::class, 'storeCategory'])->name('storeCategory');
    Route::delete('deleteCategory/{category}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
});

// Tag Routes 
Route::middleware(['auth'])->group(function () {
    Route::get('/showTag', [TagsController::class, 'showTag'])->name('showTag');
    Route::get('/createTag', [TagsController::class, 'createTag'])->name('createTag');
    Route::get('/editTag', [TagsController::class, 'editTag'])->name('editTag');
    Route::put('/updateTag', [TagsController::class, 'updateTag'])->name('updateTag');
    Route::post('/storeTag', [TagsController::class, 'storeTag'])->name('storeTag');
    Route::delete('deleteTag/{tag}', [TagsController::class, 'deleteTag'])->name('deleteTag');
});


//Blog Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/createEvents', [EventsController ::class, 'createEvents'])->name('createEvents');
    Route::post('/storeEvents', [EventsController ::class, 'storeEvents'])->name('storeEvents');
    Route::get('/showEvents', [EventsController ::class, 'showEvents'])->name('showEvents');
    Route::get('/editEvents', [EventsController ::class, 'editEvents'])->name('editEvents');
    Route::put('/updateEvents', [EventsController ::class, 'updateEvents'])->name('updateEvents');
    Route::delete('/deleteEvents/{event:slug}', [EventsController ::class, 'deleteEvents'])->name('deleteEvents');

    //Slider  
    Route::get('/showEvents', [EventsController ::class, 'showEventsSlider'])->name('showEventsSlider');

});


require __DIR__.'/auth.php';
