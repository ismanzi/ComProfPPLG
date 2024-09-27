<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Achievement::create([
            'name' => 'Best Developer',
            'position' => '1st',
            'area' => 'Software Development',
            'level' => 'National',
            'organizer' => 'Tech Conference',
            'date' => '2024-09-27',
            'desc' => 'Best Developer in National Tech Conference'
        ]);
    }
}
