<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AgendaController extends Controller
{
    function __invoke():View{
        return view('agenda');
    }
}
