<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Platform;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $directors = [
        [
        'name' => 'John Doe',
        'nationality' => 'USA',
        ],
        [
        'name' => 'Mario Rossi',
        'nationality' => 'Italy',
        ],
        [
        'name' => 'Lina Bianchi',
        'nationality' => 'Germany',
        ]
        ];

        foreach ($directors as $director) {
            Director::create([
                'name' => $director['name'],
                'nationality' => $director['nationality'],
            ]);
            
        }
    
        $platforms = ['Netflix', 'Amazon', 'Disney+', 'Apple TV+', 'NowTv', 'Paramount+'];
        foreach ($platforms as $name) {
            Platform::create([
                'name' => $name
            ]);
        }

    }
}
