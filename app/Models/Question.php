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
    public function levels()
    {
        return $this->hasOne('App\Models\Level');
    }

    /**
     * Get the quizz of the question.
     */
    public function quizzes()
    {
        return $this->hasOne('App\Models\Quiz');
    }
}