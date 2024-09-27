<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Staff::create([
            'name' => 'John Doe',
            'nip' => '123456789',
            'jobDesc' => 'Software Engineer',
            'linkedin' => 'https://linkedin.com/in/johndoe'
        ]);
    }
}
