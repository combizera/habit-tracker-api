<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $r)
    {
        dd(request()->all())->die();
    }
}
