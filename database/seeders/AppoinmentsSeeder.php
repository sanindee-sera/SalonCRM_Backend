<?php

namespace Database\Seeders;
use App\Models\Appointments;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppoinmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointments::create([
            'name' => 'John Doe',
            'start_time' => '2024-10-12 09:00:00',
            'end_time' => '2024-10-12 10:00:00',
            'description' => 'Haircut appointment'
        ]);

        Appointments::create([
            'name' => 'Jane Smith',
            'start_time' => '2024-10-12 11:00:00',
            'end_time' => '2024-10-12 12:00:00',
            'description' => 'Nail treatment'
        ]);
    }
}
