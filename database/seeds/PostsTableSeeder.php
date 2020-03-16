<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Posts::class, 10)->create()->each(function ($table) {
            //$post->posts()->save(factory(App\Post::class)->make());
        });
    }
    
    
    
    
    
    
    
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'post_content' => Str::random(10),
            'post_title' => Str::random(10),
            'post_status'=> Str::random(10),
            'post_name'=> Str::random(10),
            'post_type'=> Str::random(10),
            'post_category'=> Str::random(10),
            'post_date'=> 16032020,
        ]);
    }*/
}
