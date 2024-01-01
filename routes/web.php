<?php

use App\Models\Address;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
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

    // $result = Room::find(9);
    $result = Room::where('id', 3)->get();

    // $result->map(function($room){
    //     echo $room->cities->map(function($city){
    //         // echo $city . '<br/>';
    //         dump($city->pivot->created_at);
    //     });
    // });
    foreach ($result as $rooms) {
        foreach ($rooms->cities as $city) {
            echo '<h1>' . $city->name . '</h1>';
            // echo $city->pivot->room_id . '<br>';
            dump($city->pivot->created_at);
        }
    }



    return view('welcome');
});
