<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostsSeeder extends Seeder{
    
    public function run() {
        DB::table('Posts')->delete();
        
        Post::create([
            'user_id' => rand(1, 2),
            'category_id' => rand(1, 5),
            'title' => 'Title one',
            'description' => 'Mini text post one',
            'text' => 'Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one Full text post one ',
            'date_public' => Carbon::now()
        ]);
        Post::create([
            'user_id' => rand(1, 2),
            'category_id' => rand(1, 5),
            'title' => 'Title second',
            'description' => 'Mini text post second',
            'text' => 'Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second Full text post second ',
            'date_public' => Carbon::now()
        ]);
        Post::create([
            'user_id' => rand(1, 2),
            'category_id' => rand(1, 5),
            'title' => 'Title third',
            'description' => 'Mini text post third',
            'text' => 'Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third Full text post third ',
            'date_public' => Carbon::now()
        ]);
    }
}
