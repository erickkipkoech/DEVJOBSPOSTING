<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
//Common Resource Routes
//index-show all listings
//show- show single listing
//create- show form to create a listing
//store-store new listing
//edit- show form to edit listing
//update-update listing
//destroy-delete listing

//All Listing 
Route::get('/',  [ListingController::class, 'index']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

//Creating routes-NOT FOR THE PROJECT
/*
Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 202)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    //dd(die,dump)-gives internal error for transfer blockage
    //ddd(die,dump,debug)-gives details
    ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return($request->name.' '.$request->city);
});*/
