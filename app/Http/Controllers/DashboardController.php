<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Returns a view to the dashboard page
     */
    public function show()
    {
        return view('dashboard');
    }
}
