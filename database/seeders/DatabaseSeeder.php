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
      // \App\Models\User::factory(10)->create();

       User::create([
        'name' => 'Rudini',
        'email' => 'rudini@gmail.com',
        'password' =>bcrypt('12345')

      ]);

       Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'

      ]);

       Category::create([
        'name' => 'Personal',
        'slug' => 'personal'

      ]);
      
      Post::create([
        'title' => 'Judul Pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum ',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum impedit hic dolorum, aut reprehenderit, molestiae culpa numquam consequatur repellendus facilis quia vitae praesentium voluptates dicta ut deserunt consectetur porro distinctio temporibus veritatis. Repudiandae ratione, eligendi nobis eveniet inventore aperiam, possimus tenetur id eius earum aliquid voluptatem officiis odio est ipsa asperiores iusto vitae sint voluptates labore iure rerum. Rerum voluptatem maxime aperiam asperiores libero, soluta quam quis officiis. Veritatis reiciendis sunt perspiciatis corrupti. Voluptatibus, itaque in cumque consequatur totam natus labore libero iusto consectetur sequi laboriosam doloribus nam quaerat. Nulla.',
        'category_id' => 1,
        'user_id' => 1
      ]);

        Post::create([
        'title' => 'Judul Kedua',
        'slug' => 'judul-kedua',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum ',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum impedit hic dolorum, aut reprehenderit, molestiae culpa numquam consequatur repellendus facilis quia vitae praesentium voluptates dicta ut deserunt consectetur porro distinctio temporibus veritatis. Repudiandae ratione, eligendi nobis eveniet inventore aperiam, possimus tenetur id eius earum aliquid voluptatem officiis odio est ipsa asperiores iusto vitae sint voluptates labore iure rerum. Rerum voluptatem maxime aperiam asperiores libero, soluta quam quis officiis. Veritatis reiciendis sunt perspiciatis corrupti. Voluptatibus, itaque in cumque consequatur totam natus labore libero iusto consectetur sequi laboriosam doloribus nam quaerat. Nulla.',
        'category_id' => 1,
        'user_id' => 1
      ]);

      
        Post::create([
        'title' => 'Judul Ketigas',
        'slug' => 'judul-ketiga',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum ',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quasi ducimus magnam unde culpa architecto omnis necessitatibus? Perferendis harum impedit hic dolorum, aut reprehenderit, molestiae culpa numquam consequatur repellendus facilis quia vitae praesentium voluptates dicta ut deserunt consectetur porro distinctio temporibus veritatis. Repudiandae ratione, eligendi nobis eveniet inventore aperiam, possimus tenetur id eius earum aliquid voluptatem officiis odio est ipsa asperiores iusto vitae sint voluptates labore iure rerum. Rerum voluptatem maxime aperiam asperiores libero, soluta quam quis officiis. Veritatis reiciendis sunt perspiciatis corrupti. Voluptatibus, itaque in cumque consequatur totam natus labore libero iusto consectetur sequi laboriosam doloribus nam quaerat. Nulla.',
        'category_id' => 2,
        'user_id' => 1
      ]);


    }
}
