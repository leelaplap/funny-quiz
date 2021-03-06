<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    protected $fillable = [
        'title', 'status', 'question_id'
    ];
}
