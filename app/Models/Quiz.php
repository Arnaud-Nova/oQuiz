<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';

    /**
     * Get the question of the quiz.
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'questions_id');
    }
}