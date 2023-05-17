<?php

namespace Database\Seeders;

use App\Models\Bootcamp;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        $bootcamp = new Bootcamp;
        $bootcamp->speaker_id = 1;
        $bootcamp->category_id = 1;
        $bootcamp->title = 'Web Developer';
        $bootcamp->slug = 'web-developer';
        $bootcamp->description = 'Awesome Job';
        $bootcamp->event_type = 'Offline';
        $bootcamp->place_event = 'Ballroom';
        $bootcamp->start_event = date('Y-m-d', time());
        $bootcamp->event_time = date('H:i:s', time());
        $bootcamp->end_event = $currentDateTime->addDay(3);
        $bootcamp->price = 280000;
        $bootcamp->save();
    }
}
