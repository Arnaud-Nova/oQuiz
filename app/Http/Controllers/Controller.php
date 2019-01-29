<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Utils\UserSession;

class Controller extends BaseController
{
    public function __construct()
    {
        // On va partager les infos du user aux vues
        View::share('isConnected', UserSession::isConnected());
        View::share('getUser', UserSession::getUser());
        // View::share('isAdmin', UserSession::isAdmin());
    }
}
