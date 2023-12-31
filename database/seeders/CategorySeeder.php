<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>  'Shopping',
        ]);
        Category::create([
            'name'  =>  'Finance',
        ]);
        Category::create([
            'name'  =>  'Travel',
        ]);
        Category::create([
            'name'  =>  'food',
        ]);
        Category::create([
            'name'  =>  'miscellaneous',
        ]);
    }
}
