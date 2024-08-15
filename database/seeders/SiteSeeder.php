<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        Site::create([
            'name' => 'Percepat',
            'link' => 'https://percepat.bbpommataram.id',
            'desc' => 'Persediaan cepat dan tepat',
            'logo_path' => '',
            'pic' => 'KBKC'
        ]);

        Site::create([
            'name' => 'E - Tamu',
            'link' => 'https://e-tamu.bbpommataram.id',
            'desc' => 'Elektronik penerimaan tamu',
            'logo_path' => '',
            'pic' => 'unknown'
        ]);

        Site::create([
            'name' => 'Siproval',
            'link' => 'https://siproval.bbpommataram.id',
            'desc' => '',
            'logo_path' => '',
            'pic' => 'unknown'
        ]);

        Site::create([
            'name' => 'Simple',
            'link' => 'https://simantan.bbpommataram.id',
            'desc' => 'Sistem pemeliharaan',
            'logo_path' => '',
            'pic' => 'Santoso'
        ]);

        Site::create([
            'name' => 'Sijelapp',
            'link' => 'https://sijelapp.bbpommataram.id',
            'desc' => 'Sistem Jejak Telusur Laporan Pengujian Pihak Ketiga',
            'logo_path' => '',
            'pic' => 'unknown'
        ]);
    }
}
