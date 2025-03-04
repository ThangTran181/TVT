<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nhasanxuat; // Import the Nhasanxuat model

class NhasanxuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Nhasanxuat::create(['ten' => 'CongTy1', 'logo' => 'logo1.png', 'status' => 1, ]);
        Nhasanxuat::create(['ten' => 'CongTy2', 'logo' => 'logo2.png', 'status' => 1, ]);
        Nhasanxuat::create(['ten' => 'CongTy3', 'logo' => 'logo3.png', 'status' => 0, ]);

    }
}
