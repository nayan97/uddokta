<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        Plan::create([
            'name' => 'Lite',
            'sub_title' => 'Perfect To Get Started',
            'price' => 29.99,
            'image' => 'lite.png',
            'pack_title' => 'This is Silver',
            'analytics_campaigns' => 25,
            'keywords' => 1300,
            'social_media_reviews' => 25,
            'free_optimizations' => 1,
            'support_247' => true,
            'offer_tag' => 'Happy New Year Offer',
            'discount_percentage' => 10.00,
        ]);

        Plan::create([
            'name' => 'Pro',
            'sub_title' => 'Best For Professionals',
            'price' => 39.99,
            'image' => 'pro.png',
            'pack_title' => 'This is Gold',
            'analytics_campaigns' => 50,
            'keywords' => 2600,
            'social_media_reviews' => 50,
            'free_optimizations' => 3,
            'support_247' => true,
            'offer_tag' => 'Happy New Year Offer',
            'discount_percentage' => 10.00,
        ]);

        Plan::create([
            'name' => 'Ultimate',
            'sub_title' => 'Toolset For Hard Players',
            'price' => 49.99,
            'image' => 'ultimate.png',
            'pack_title' => 'This is Plutinum',
            'analytics_campaigns' => 75,
            'keywords' => 3900,
            'social_media_reviews' => 75,
            'free_optimizations' => 5,
            'support_247' => true,
            'offer_tag' => 'Happy New Year Offer',
            'discount_percentage' => 10.00,
        ]);
    }
}
