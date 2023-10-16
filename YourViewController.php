<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourViewController extends Controller
{
    public function yourViewFunction()
    {
        return view('yourview');
    }
}