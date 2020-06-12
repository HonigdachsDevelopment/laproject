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


    Route::resource('channel', 'ChannelController');

// ADMIN ROUTES HERE
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
        // Grouped Admin UsersController
        Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
        Route::resource('/clients', 'ClientsController', ['except' => ['show', 'create', 'store']]);
    });
