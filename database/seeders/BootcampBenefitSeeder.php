<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\BootcampBenefit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BootcampBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefit = new BootcampBenefit;
        $benefit->uuid = Str::uuid()->toString();
        $benefit->bootcamp_id = 1;
        $benefit->name = 'Sertifikat';
        $benefit->save();
    }
}
