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
            'title' => $this->faker->realText(80,2),
            'description'=>$this->faker->text(250),
            'img'=> $this->faker->imageUrl(640,480,null,true,null,false),
            'content'=>$this->faker->realTextBetween(300,1000,2)
        ];
    }
}
