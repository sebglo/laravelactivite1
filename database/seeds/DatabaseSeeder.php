<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);


    //    DB::table('users')->insert([
    //         'name' => Str::random(10),
    //         'email' => Str::random(10).'@gmail.com',
    //         'password' => Hash::make('password'),
    //     ]);

    //     DB::table('posts')->insert([
    //         'user_id' => 1,
    //         'post_content' => Str::random(10),
    //         'post_title' => Str::random(10),
    //         'post_status'=> Str::random(10),
    //         'post_name'=> Str::random(10),
    //         'post_type'=> Str::random(10),
    //         'post_category'=> Str::random(10),
    //         'post_date'=> '2020-03-13 12:00', 
            
    //     ]);
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
