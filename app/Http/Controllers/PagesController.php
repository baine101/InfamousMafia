<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome()
    {

        return view('welcome');

    }

    public function about()
    {

        $first = 'fox';
        $last = 'bizaine';

        return view ('pages.about', compact('first', 'last'));
    }

    public function contact()
    {

        return view('pages.contact');

    }

}
