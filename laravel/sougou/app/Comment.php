<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //単数形
    public function post()
    {
        return $this->belingsTo('App\Post');
    }



    public function user()
    {
        //1津のモデルから複数かの情報をとれる
        return $this->belongsTo('App\User');
    }
}
