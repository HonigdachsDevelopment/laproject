<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------*/

// ADD YOUR PUBLIC ROUTES HERE
    Route::get('/', 'ContentPublicController@landing')->name('landing');
    Route::get('/about', 'ContentPublicController@about')->name('about');
    Route::get('/contact', 'ContentPublicController@contact')->name('contact');
    Route::post('/contact', 'ContentPublicController@sendcontact');



// USER ROUTES HERE
    Auth::routes();
    Route::get('/dashboard', 'ContentInternController@dashboard')->name('dashboard');
    Route::get('/ui/grid', 'ContentInternController@uigrid')->name('uigrid');

    Route::namespace('User')->prefix('user')->name('user.')->group(function () {
        Route::resource('/channel', 'ChannelController');
        Route::resource('/account', 'AccountController');
    });

// ADMIN ROUTES HERE
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
        // Grouped Admin UsersController
        Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    });
