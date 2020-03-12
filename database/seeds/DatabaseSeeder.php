<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('posts')->insert([
            'user_id' => Str::random(10),
            'post_date'
            'post_content' => $faker->paragraph,
            'post_title' => Str::random(10),
            'post_status'=> Str::random(10),
            'post_name'=> $faker->name,
            'post_type'=> Str::random(10),
            'post_category'=> Str::random(10),
            
        ]);
    }
}










// --------------origine----------------------
//use Illuminate\Database\Seeder;

//class DatabaseSeeder extends Seeder
//{
    /**
     * Seed the application's database.
     *
     * @return void
     */
//    public function run()
//    {
//        $this->call(UsersTableSeeder::class);
//    }
//}
