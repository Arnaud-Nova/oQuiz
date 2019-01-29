<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\UserSession;
use App\Models\AppUser;
use Illuminate\Support\Facades\View;






class UserController extends Controller
{
    public function signin(Request $request)
    {
        $errors = [];

        $email = $request->input('email');
        $password = $request->input('password');

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'L\'adresse e-mail n\'est pas une adresse correcte.';
        }

        if (empty($errors)) {
            // email existe ?
            $user = AppUser::where('email', $email)->first();
            // dump($user);
            if ($user){
                // correspondance email / password ?
                if (password_verify($password, $user->password)) {
                    UserSession::connect($user);
                    // dump($user);
                    return redirect()->route('home');
                } else {
                    $errors[] = 'Les identifiants sont incorrects';
                    $modal = true;
                }
            } else {
                $errors[] = 'Les identifiants sont incorrects';
                $modal = true;
            }
        }
        View::share('title', 'Accueil');
        View::share('errors', $errors);
        View::share('modal', $modal);
        // dump($user);
        return redirect()->route('home');
    }

    public function signup(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $errors = [];
        // dump($request);
        if (empty($email)) {
            $errors[] = 'L\'adresse e-mail est requise.';
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'L\'adresse e-mail n\'est pas une adresse correcte.';
        }
        if (empty($password)) {
            $errors[] = 'Le mot de passe est requis.';
        }
        if (empty($firstname)) {
            $errors[] = 'Le prénom est requis.'; 
        }
        if (empty($lastname)) {
            $errors[] = 'Le nom est requis.'; 
        }
        // dump($errors);
        if (empty($errors)) {
            $userExist = AppUser::where('email', $email)->first();
            dump($userExist);
            if ($userExist) {
                $errors[] = 'Cet email est déjà utilisé';
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $newUser = new AppUser();
                $newUser->email = $email;
                $newUser->firstname = $firstname;
                $newUser->lastname = $lastname;
                $newUser->password = $passwordHash;
                $newUser->save();

                return redirect()->route('signup-confirm');
            }
        }
    }

    public function logout()
    {
        UserSession::disconnect();
        return redirect()->route('home');
    }
}