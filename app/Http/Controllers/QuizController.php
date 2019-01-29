<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\AppUser;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Level;
use Illuminate\Support\Facades\View;
use App\Utils\UserSession;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz(Request $request, $id)
    {   
        $quiz = Quiz::find($id);
        $levels = Level::all();
    
        View::share('quiz', $quiz);
        View::share('title', $quiz->title);
        $questionsQuiz = $quiz->questions;

        $answers = []; // Tableau qui va contenir les réponses concernées
        foreach($questionsQuiz as $question) {
            // On récupère les réponses à la question
            $answersCollection = Answer::where('questions_id', $question->id)->get();
            // on mélange les questions (car la 1ere est tjrs la bonne réponse)
            $answers[$question->id] = $answersCollection->shuffle();
        }

        if ($request->method() == 'GET') {
            $userIsConnected = UserSession::isConnected();

            if ($userIsConnected) {
                return view('quiz_connected', [
                    'quiz' => $quiz,
                    'questionsQuiz' => $questionsQuiz,
                    'answers' => $answers,
                    'levels' => $levels,
                ]);
            } else {
                return view('quiz_view', [
                    'quiz' => $quiz,
                    'questionsQuiz' => $questionsQuiz,
                    'answers' => $answers,
                    'levels' => $levels,
                ]);
            }
        } elseif ($request->method() == 'POST') {
            $result = 0;
            $quizAnswers = $request->input();
            foreach ($quizAnswers as $questionId => $answerId) {
                $question = Question::find($questionId);
                if ($question->answers_id == $answerId) {
                    $result ++;
                }
            }
            return view('quiz_connected', [
                'quiz' => $quiz,
                'questionsQuiz' => $questionsQuiz,
                'answers' => $answers,
                'levels' => $levels,
                'result' => $result,
                ]);

            
        }
        
    }
}

