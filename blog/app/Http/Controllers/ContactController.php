<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function phone()
    {
        return view('phone');
    }
    public function contact()
    {
        return view('address');
    }
}
