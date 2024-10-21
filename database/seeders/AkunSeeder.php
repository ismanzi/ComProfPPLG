<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'manzione',
                'level'=>'admin',
                'password'=>Hash::make('123')
            ],
            
            [
                'username'=>'midori',
                'level'=>'guest',
                'password'=>Hash::make('111')
            ],
            [
                'username'=>'altap',
                'level'=>'guest',
                'password'=>Hash::make('222')
            ],
            [
                'username'=>'nasyah',
                'level'=>'guest',
                'password'=>Hash::make('333')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    
    }
}
