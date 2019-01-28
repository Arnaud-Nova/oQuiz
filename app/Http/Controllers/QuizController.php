<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\AppUser;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Level;

class QuizController extends Controller
{
    public function quiz($id)
    {
        $quiz = Quiz::find($id);
        $author = Appuser::find($quiz->app_users_id);
       

        $questionsQuiz = Question::where('quizzes_id', $quiz->id)->get();
       
        // dump($answer->question);
        
        // dump($answersQuestionsQuiz);
        $levels = Level::all();
        

        return view('quizconsult', [
            'quiz' => $quiz,
            'author' => $author,
            'questionsQuiz' => $questionsQuiz,
            'levels' => $levels
        ]);
    }
}

