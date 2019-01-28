<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany('App\Models\Answer', 'questions_id');
    }

    /**
     * Get the level of the question.
     */
    public function level()
    {
        return $this->belongsTo('App\Models\Level', 'levels_id');
    }
}