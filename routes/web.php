<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;


//all listing
// Route::get('/', [ListingController::class, 'index']);


//single listing
// Route::get('/listings/{id}', [ListingController::class, 'show']);

// Route::get('/', function(){
//     return view('view', 'App\Http\Controllers\ListingController@view');
// });

Route::get('/', 'App\Http\Controllers\ListingController@view');