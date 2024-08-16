<?php

namespace App\Imports;

use App\Models\Agenda;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AgendaImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        // truncate tabel dari controller, disini error 
        foreach ($rows as $row) {
            $excelDate = $row['tanggal']; // Tanggal dalam format serial Excel
            $tanggal = $excelDate ? Carbon::createFromDate(1900, 1, 1)->addDays($excelDate - 2)->format('Y-m-d') : null;

            Agenda::create([
                // $row[0] adalah no
                'tanggal' =>$tanggal,
                'kegiatan' => $row['kegiatan'],
                'tempat' => $row['tempat'],
            ]);
        }
    }

    public function headingRow(): int
    {
        return 3;
    }
}
