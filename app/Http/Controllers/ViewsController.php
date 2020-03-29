<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    /*public function admin()
    {
        return view('admin');
    }*/

    /*public function staff()
    {
        return view('staff');
    }*/

    
    /*public function schedule()
    {
        return view('schedule');
    }*/
}
