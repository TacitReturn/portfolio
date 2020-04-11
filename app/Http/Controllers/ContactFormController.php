<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //
    public function create() {
        return view('contact.create');
    }
    public function store() {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:10',
            'message' => 'required|min:50',
        ]);
        dd(request()->all());
    }
}
