<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CartController;


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('*', [UserController::class, 'errorPage'])->name('errorPage');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/event', [UserController::class, 'event'])->name('event');
Route::get('/singleEvent/${event:slug}', [UserController::class, 'singleEvent'])->name('singleEvent');
Route::get('/orderConfirmation', [UserController::class, 'orderConfirmation'])->name('orderConfirmation');
Route::get('/category', [UserController::class, 'category'])->name('category');
Route::get('/checkout/${events:slug}', [CartController::class, 'checkout'])->name('checkout');

Route::post('/storeOrder', [CartController::class, 'storeOrder'])->name('storeOrder'); 


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [CartController::class, 'order'])->name('order');  
    Route::delete('/deleteOrder/{item}', [CartController::class, 'deleteOrder'])->name('deleteOrder');
});


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
    Route::get('/showEventsToSlide', [EventsController ::class, 'showEventsSlider'])->name('showEventsSlider');
    Route::post('/addToSlide/{eventId}', [EventsController::class, 'addToSlide'])->name('addToSlide');


});


require __DIR__.'/auth.php';
