<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Termina la sesión del usuario actual.
     */
    public function logout () {
        Session::flush();

        Auth:: logout();

        return redirect('/login');
    }
}
