<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\AppUser;


class MainController extends Controller
{
    public function home()
    {
        $quizzes = Quiz::all();
        $authors = AppUser::all();


        return view('home', [
            'quizzes' => $quizzes,
            'authors' => $authors,
        ]);
    }
}
