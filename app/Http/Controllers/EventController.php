<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function acompanhantes()
    {
        return view('acompanhantes');
    }
    public function profile()
    {
        return view('profile');
    }
}
