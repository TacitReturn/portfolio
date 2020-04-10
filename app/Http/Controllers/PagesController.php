<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Index Method
    public function index() {

        return view('pages.index');
    }

    // Resume Method
    public function resume() {
        return view('pages.resume');
    }

}
