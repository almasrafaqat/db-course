<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
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

    return $result = User::select([
        'users.*',
        'last_comment_at'   => Comment::selectRaw('MAX(created_at)')
            ->whereColumn('user_id', 'users.id')
    ])->withCasts([
        'last_comment_at' => 'datetime:m-d',
    ])->get();

    return view('welcome');
});
