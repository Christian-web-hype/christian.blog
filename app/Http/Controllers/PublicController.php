<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function who() {
        return view('who');
    }
}
