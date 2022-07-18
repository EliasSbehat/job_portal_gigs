<?php

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

//All listings
Route::get('/', function () {
    return view("listings", [
        "heading" => "Latest Gigs",
        "listings" => Listing::all()
    ]);
});

//Single listing
Route::get("/listing/{id}", function ($id){
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});

