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
        return $this->belongsToMany('App\Models\City', 'city_room', 'room_id', 'city_id')->withPivot('created_at', 'updated_at');
        // return $this->belongsToMany('App\Models\City', 'city_room', 'room_id', 'city_id')->withPivot('created_at','updated_at'); // 1st 2nd 3rd args are optional
    }
}
