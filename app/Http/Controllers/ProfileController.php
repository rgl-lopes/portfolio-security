<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Returns a view to the profile page
     */
    public function show()
    {
        return view('profile');
    }
}
