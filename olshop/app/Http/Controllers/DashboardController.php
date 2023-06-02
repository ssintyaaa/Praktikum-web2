<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // properti 1 dengan nama index
    public function index(){
        return view('admin.dashboard');
    }

    public function index_frontend(){
        return view('frontend.dashboard');
    }
}
