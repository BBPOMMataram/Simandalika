<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    function edit()
    {
        $arsip = [
            'in-tw1' => Arsip::firstWhere(['tw' => 1, 'jenis' => 'in'])->jumlah,
            'in-tw2' => Arsip::firstWhere(['tw' => 2, 'jenis' => 'in'])->jumlah,
            'in-tw3' => Arsip::firstWhere(['tw' => 3, 'jenis' => 'in'])->jumlah,
            'out-tw1' => Arsip::firstWhere(['tw' => 1, 'jenis' => 'out'])->jumlah,
            'out-tw2' => Arsip::firstWhere(['tw' => 2, 'jenis' => 'out'])->jumlah,
            'out-tw3' => Arsip::firstWhere(['tw' => 3, 'jenis' => 'out'])->jumlah,
        ];

        return view('arsip', compact('arsip'));
    }

    function update(Request $request) {
        Arsip::where(['tw' => 1, 'jenis' => 'in'])
        ->update([
            'jumlah' => $request["surat-masuk-tw1"],
        ]);
        
        Arsip::where(['tw' => 2, 'jenis' => 'in'])
        ->update([
            'jumlah' => $request["surat-masuk-tw2"],
        ]);
        
        Arsip::where(['tw' => 3, 'jenis' => 'in'])
        ->update([
            'jumlah' => $request["surat-masuk-tw3"],
        ]);
        
        Arsip::where(['tw' => 1, 'jenis' => 'out'])
        ->update([
            'jumlah' => $request["surat-keluar-tw1"],
        ]);
        
        Arsip::where(['tw' => 2, 'jenis' => 'out'])
        ->update([
            'jumlah' => $request["surat-keluar-tw2"],
        ]);
        
        Arsip::where(['tw' => 3, 'jenis' => 'out'])
        ->update([
            'jumlah' => $request["surat-keluar-tw3"],
        ]);

        return redirect()->back()->with(['arsip' => ['msg' => 'berhasil update data', 'status' => 1]]);
    }

}
