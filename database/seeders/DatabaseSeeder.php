<?php

namespace Database\Seeders;
use App\Models\Appointments;
use App\Models\Category;
use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password@123'
        ]);

        Category::factory(10)->create();

        Appointments::factory(10)->create();





    }
}
