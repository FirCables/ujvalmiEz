<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

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

        $json = File::get('database/data/restaurants.json');
        $restaurants = json_decode($json, true);
        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
        $json = File::get('database/data/reviews.json');
        $reviews = json_decode($json, true);
        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
