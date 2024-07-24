<?php

namespace Database\Seeders;

use App\Models\Admission;
use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Treatement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Patient::factory(30)->create();
        Doctor::factory(15)->create();
        Room::factory(20)->create();
        Admission::factory(100)->create();
        Consultation::factory(50)->create();
        Treatement::factory(20)->create();
    }
}
