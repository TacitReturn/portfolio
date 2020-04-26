<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    protected $guarded = [];
    protected $table = 'posts';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
