<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function test()
    {
        return $this->belongsTo('App\Test');
    }
}
