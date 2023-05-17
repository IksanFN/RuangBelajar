<?php

namespace Database\Seeders;

use App\Models\BootcampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefit = new BootcampBenefit;
        $benefit->bootcamp_id = 1;
        $benefit->name = 'Sertifikat';
        $benefit->save();
    }
}
