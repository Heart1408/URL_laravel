<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentListController extends Controller
{
    public function show()
    {
        return view('studentList');
    }
}
