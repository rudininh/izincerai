<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pasien' =>  $this->faker->name,
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' .implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3)
        ];
    }
}
 