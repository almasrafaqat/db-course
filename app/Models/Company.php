<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function reservations(){
        return $this->hasManyThrough('App\Models\Reservation', 'App\Models\User', 'company_id', 'user_id', 'id', 'id');

        /*
        company_id: Identifies the company in the User table.
        user_id: Identifies the user in the Reservation table.
        id, id: Refer to the primary keys of the Company and User tables
        */ 
    }

}
