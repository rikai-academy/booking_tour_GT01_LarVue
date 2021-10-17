<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeed extends Seeder
{
    public function run()
    {
        $categories = ['Place', 'Food', 'News'];
        
        for ($i=0; $i < count($categories); $i++) { 
            Category::create([
                'name' => $categories[$i],
            ]);
        }
    }
}
