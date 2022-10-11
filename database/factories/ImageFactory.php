<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // true -> /public/storage/posts/image1.png
            // false -> image1.png
            // 'url' => 'posts/'.$this->faker->image('public/storage/posts', 640, 480, null, false) // /posts/image1.png
            'url' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
