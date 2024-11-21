<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Fitra Romeo Winky',
        //     'email' =>'fitraromeowinky@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Verera Mutiara Cahyani',
        //     'email' =>'verera@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
       
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
