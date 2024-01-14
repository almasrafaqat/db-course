<?php

use App\Models\Address;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

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



Route::get('/', function () {




    // $result = User::with('comments')->get();

    $result = DB::table('users')->join('comments', 'users.id', '=', 'comments.user_id')->get();
  
    dump($result);


    return view('welcome');
});
