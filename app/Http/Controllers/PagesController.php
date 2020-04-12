<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Index Method
    public function index() {

        return view('pages.index');
    }
    // Projects Method
    public function projects() {
        return view('pages.projects');
    }
}
