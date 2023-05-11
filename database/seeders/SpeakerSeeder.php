<?php

namespace Database\Seeders;

use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $speaker = new Speaker;
        $speaker->name = 'Sandhika Galih';
        $speaker->email = 'sandhika@gmail.com';
        $speaker->occupation = 'Web Developer';
        $speaker->status = 'Bekerja';
        $speaker->workplace = 'PT. GOTO INDONESIA';
        $speaker->address = 'Cipatat';
        $speaker->city = 'Bandung Barat';
        $speaker->save();
    }
}
