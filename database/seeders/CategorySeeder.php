<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('categories')->insert([
    [
        'name' => 'Personal Development',
        'color' => '#FF5733',
        'icon_url'=>'https://fontawesome.com/icons/user?f=classic&s=solid',
        'image_filter'=>'grayscale',
        'image_seed_offset'=>10,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Health & Fitness',
        'color' => '#FF1235',
        'icon_url'=>'https://fontawesome.com/icons/heart-pulse?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>10,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Work & Productivity',
        'color' => '#122888',
        'icon_url'=>'https://fontawesome.com/icons/briefcase?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>10,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Education & Learning',
        'color' => '#122444',
        'icon_url'=>'https://fontawesome.com/icons/book?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>10,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Household & Maintenance',
        'color' => '#552444',
        'icon_url'=>'https://fontawesome.com/icons/house?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>10,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Finance & Budgeting',
        'color' => '#00695C',
        'icon_url'=>'https://fontawesome.com/icons/wallet?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>12,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Creativity & Hobbies',
        'color' => '#8E44AD',
        'icon_url'=>'https://fontawesome.com/icons/palette?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>8,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Social & Relationships',
        'color' => '#2980B9',
        'icon_url'=>'https://fontawesome.com/icons/users?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>5,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Travel & Errands',
        'color' => '#D35400',
        'icon_url'=>'https://fontawesome.com/icons/car?f=classic&s=solid',
        'image_filter'=>null,
        'image_seed_offset'=>15,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Well-Being & Self-Care',
        'color' => '#16A085',
        'icon_url'=>'https://fontawesome.com/icons/leaf?f=classic&s=solid',
        'image_filter'=>'Blur',
        'image_seed_offset'=>7,
        'created_at' => now(),
        'updated_at' => now(),
    ],]);   
    }
}
