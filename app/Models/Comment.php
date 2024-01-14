<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $touches = ['user'];

    //  protected static function booted()
    // {
    //     static::addGlobalScope('rating', function (Builder $builder) {
    //         $builder->where('rating', '<', 2);
    //     });
    // }

    // public function scopeRating($query, int $value = 4)
    // {
    //     return $query->where('rating', '>', $value);
    // }

    // protected static function booted()
    // {
    //     static::retrieved(function ($comment) {
    //         echo $comment->rating;
    //     });
    // }

    // public function getRatingAttribute($value)
    // {
    //     return  $value + 10;
    // }

    // public function getWhoWhatAttribute()
    // {
    //     return "user {$this->user_id} rates {$this->rating}";
    // }

    // public function setRatingAttribute($value)
    // {
    //     $this->attributes['rating'] = $value + 1;
    // }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function country()
    {
        return $this->hasOneThrough('App\Models\Address', 'App\Models\User', 'id', 'user_id', 'user_id', 'id')->select('country as name');

        /*
        id: Identifies the Comment table link in the User table.
        user_id: Identifies the user in the Address table.
        user_id : Identifies the user in the Comment table
        id: primary key of User table
        */
    }

    public function commentable(){
        return $this->morphTo();
    }
}
