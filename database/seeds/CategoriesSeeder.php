<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder{
    
    public function run() {
        DB::table('Categories')->delete();
        
        Category::create([
            'name' => 'Основное'
        ]);
        Category::create([
            'name' => 'Вспомогательное'
        ]);
        Category::create([
            'name' => 'Новое'
        ]);
        Category::create([
            'name' => 'Особенное'
        ]);
        Category::create([
            'name' => 'Разное'
        ]);
    }
}
