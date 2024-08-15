<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function __invoke()
    {
        $data = Site::all();
        return view('welcome', compact('data'));
    }
}
