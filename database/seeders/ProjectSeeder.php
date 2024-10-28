<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models 
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i=0; $i < 15; $i++) { 
            $name = fake()->words(3, true);
            $slug = str()->slug($name);
            Project::create([
                'name' => $name,
                'slug' => $slug,
                'description' => fake()->text(),
                'delivery_time' => rand(1,110),
                'price' => fake()->randomFloat(2, 1 , 99999),
                'complete' => fake()->boolean(80),
            ]);
        }
    }
}
