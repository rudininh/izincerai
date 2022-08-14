<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
      User::create([
        'name' => 'Rudini Nor Habibi',
        'username' => 'rudini',
        'email' => 'rudini@gmail.com',
        'password' => bcrypt('123456')
      ]);
      
      User::create([
        'name' => 'Supardi',
        'username' => 'supardi',
        'email' => 'suparboy@gmail.com',
        'password' => bcrypt('123456')
      ]);
 
       Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'

      ]);

       Category::create([
        'name' => 'Personal',
        'slug' => 'personal'

      ]);

       Category::create([
        'name' => 'Web Design',
        'slug' => 'web-design'

      ]);
 
      User::factory(3)->create();
      Post::factory(20)->create();


    }
}
