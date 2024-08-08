<?php

namespace Database\Seeders;

use App\Models\Arsip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArsipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arsip::create([
            'tw' => 1,
            'jenis' => 'in',
            'jumlah' => 0
        ]);
        
        Arsip::create([
            'tw' => 2,
            'jenis' => 'in',
            'jumlah' => 0
        ]);
        
        Arsip::create([
            'tw' => 3,
            'jenis' => 'in',
            'jumlah' => 0
        ]);

        
        Arsip::create([
            'tw' => 1,
            'jenis' => 'out',
            'jumlah' => 0
        ]);
        
        Arsip::create([
            'tw' => 2,
            'jenis' => 'out',
            'jumlah' => 0
        ]);
        
        Arsip::create([
            'tw' => 3,
            'jenis' => 'out',
            'jumlah' => 0
        ]);
    }
}
