<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __invoke(): View
    {
        $arsip = [
            'in-tw1' => Arsip::firstWhere(['tw' => 1, 'jenis' => 'in']),
            'in-tw2' => Arsip::firstWhere(['tw' => 2, 'jenis' => 'in']),
            'in-tw3' => Arsip::firstWhere(['tw' => 3, 'jenis' => 'in']),
            'out-tw1' => Arsip::firstWhere(['tw' => 1, 'jenis' => 'out']),
            'out-tw2' => Arsip::firstWhere(['tw' => 2, 'jenis' => 'out']),
            'out-tw3' => Arsip::firstWhere(['tw' => 3, 'jenis' => 'out']),

        ];

        return view('chart.dashboard', compact('arsip'));
    }
}
