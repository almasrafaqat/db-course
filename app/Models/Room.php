<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    // protected $table = 'my_rooms';
    // protected $primaryKey = 'room_id';
    // public $timestamps = false;
    // protected $connection = 'sqlite';

    public function cities(){
        return $this->belongsToMany('App\Models\City', 'city_room', 'room_id', 'city_id')->withPivot('created_at', 'updated_at')->using('App\Models\CityRoom'); // 1st 2nd 3rd args are optional
    }

    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function likes(){
        return $this->morphToMany('App\Models\User', 'likeable');
    }
}
