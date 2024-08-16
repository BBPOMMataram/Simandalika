<?php

namespace App\Http\Controllers;

use App\Imports\AgendaImport;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class AgendaController extends Controller
{
    function __invoke():View{
        $agenda = Agenda::where('kegiatan', '<>', null)->orderBy('tanggal', 'desc')->get();
        
        return view('agenda', compact('agenda'));
    }

    function import_agenda(){
        Agenda::truncate();
        
        Excel::import(new AgendaImport, 'agenda.xlsx');
        return '<h1 class="text-xl">IMPORTED</h1>';
    }
}
