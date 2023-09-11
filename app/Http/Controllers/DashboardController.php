<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // dd(Auth::user()->role);
        if (auth()->user()->roles == 2 || auth()->user()->roles == 1) {
            return view('pages.dashboard.admin');
        } else if (auth()->user()->roles == 3) {
            return view('pages.dashboard.user');
        }
    }
}
