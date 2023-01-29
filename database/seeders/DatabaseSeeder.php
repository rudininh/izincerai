<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Pangkat;
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

      Pangkat::create([
        'nama_pangkat' => 'Juru Muda',
        'golongan_pangkat' => 'I/',
        'ruang_pangkat' => 'a'
      ]);
      
      Pangkat::create([
        'nama_pangkat' => 'Juru Muda Tk. I',
        'golongan_pangkat' => 'I/',
        'ruang_pangkat' => 'b'
      ]);
      Pangkat::create([
        'nama_pangkat' => 'Juru',
        'golongan_pangkat' => 'I/',
        'ruang_pangkat' => 'c'
      ]);
      Pangkat::create([
        'nama_pangkat' => 'Juru Tk. I',
        'golongan_pangkat' => 'I/',
        'ruang_pangkat' => 'd'
      ]);
      Pangkat::create([
        'nama_pangkat' => 'Pengatur Muda',
        'golongan_pangkat' => 'II/',
        'ruang_pangkat' => 'a'
      ]);
          Pangkat::create([
        'nama_pangkat' => 'Pengatur Muda Tk. I',
        'golongan_pangkat' => 'II/',
        'ruang_pangkat' => 'b'
      ]);
          Pangkat::create([
        'nama_pangkat' => 'Pengatur',
        'golongan_pangkat' => 'II/',
        'ruang_pangkat' => 'c'
      ]);
          Pangkat::create([
        'nama_pangkat' => 'Pengatur Tk. I',
        'golongan_pangkat' => 'II/',
        'ruang_pangkat' => 'd'
      ]);
          Pangkat::create([
        'nama_pangkat' => 'Penata Muda',
        'golongan_pangkat' => 'III/',
        'ruang_pangkat' => 'a'
      ]);
             Pangkat::create([
        'nama_pangkat' => 'Penata Muda Tk. I',
        'golongan_pangkat' => 'III/',
        'ruang_pangkat' => 'b'
      ]);
        Pangkat::create([
        'nama_pangkat' => 'Penata',
        'golongan_pangkat' => 'III/',
        'ruang_pangkat' => 'c'
      ]);
        Pangkat::create([
        'nama_pangkat' => 'Penata Tk. I',
        'golongan_pangkat' => 'III/',
        'ruang_pangkat' => 'd'
      ]);
        Pangkat::create([
        'nama_pangkat' => 'Pembina',
        'golongan_pangkat' => 'IV/',
        'ruang_pangkat' => 'a'
      ]);
        Pangkat::create([
        'nama_pangkat' => 'Pembina Tk. I',
        'golongan_pangkat' => 'IV/',
        'ruang_pangkat' => 'b'
      ]);
        Pangkat::create([
        'nama_pangkat' => 'Pembina Utama Muda',
        'golongan_pangkat' => 'IV/',
        'ruang_pangkat' => 'c'
      ]);
          Pangkat::create([
        'nama_pangkat' => 'Pembina Utama Madya',
        'golongan_pangkat' => 'IV/',
        'ruang_pangkat' => 'd'
      ]);
 
          Pangkat::create([
        'nama_pangkat' => 'Pembina Utama',
        'golongan_pangkat' => 'IV/',
        'ruang_pangkat' => 'e'
      ]);
 
 
 
      User::factory(3)->create();
      Post::factory(20)->create();


    }
}
