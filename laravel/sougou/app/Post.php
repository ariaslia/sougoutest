<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //commentメソッド　
    public function comments()
    {
        //1つのモデルから複数かの情報をとれる
        return $this->hasMany('App\Comment');
    }



    public function user()
    {
        //1つのモデルから複数かの情報をとれる
        return $this->belongsTo('App\User');
    }
}
