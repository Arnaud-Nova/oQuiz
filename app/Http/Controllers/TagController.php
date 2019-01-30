<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;
use App\Models\Tag;

class TagController extends Controller
{
    public function tags()
    {
        $tags = Tag::all();

        View::share('title', 'Sujets de quiz');

        return view('tag', [
            'tags' => $tags,
        ]);
    }

    

}

