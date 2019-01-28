<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Get the question of the answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'questions_id');
    }
}