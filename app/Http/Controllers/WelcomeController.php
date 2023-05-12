<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Returns a view to the welcome page
     */
    public function show()
    {
        return view('welcome');
    }
}
