<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\AppUser;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function home()
    {
        $quizzes = Quiz::all();

        View::share('title', 'Accueil');

        return view('home', [
            'quizzes' => $quizzes,
        ]);
    }

    
    public function signupConfirm()
    {
        View::share('title', 'Confirmation d\'inscription');

        return view('signupConfirm');
    }
}

