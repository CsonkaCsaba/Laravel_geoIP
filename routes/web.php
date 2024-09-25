<?php

use App\Http\Controllers\IPController;
use Illuminate\Support\Facades\Route;
use \Torann\GeoIP\Facades\GeoIP;

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

Route::get('/', function () {
    $geoIPInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    $state = $geoIPInfo->state_name;
    return view('welcome', ["state"=>$state]);
});

