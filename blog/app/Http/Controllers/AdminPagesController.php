<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    function Dashboard(){
        return view('admin.dashboard');
    }

}
