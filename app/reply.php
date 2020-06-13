<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    public function comment() {
        return belongTo('App\Comment');
    }
}
