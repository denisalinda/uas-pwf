<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DosenModel;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_dosen'] = 'Bu Linda';
        $in['nip'] = '12.1.12';
        $in['foto_dosen'] = 'apaya';
        DosenModel::create($in);
    }
}
