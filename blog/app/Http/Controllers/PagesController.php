<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        $title = 'Home';
        return view('pages.home')->withTitle($title);
    }
    function about()
    {
        $title = 'About';
        return view('pages.about')->withTitle($title);
    }
    function contact()
    {
        $title = 'Contact';
        return view('pages.contact')->withTitle($title);
    }
    function readMore()
    {
        $title = 'More';
        return view('pages.readMore')->withTitle($title);
    }

}
