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

        View::share('title', 'Acceuil');

        return view('home', [
            'quizzes' => $quizzes,
        ]);
    }
}
