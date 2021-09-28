<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $content = $this->faker->realText();
        return [
            'title' => $title,
            'content' => $content,
            'image' => $this->faker->imageURL(640, 480, 'animals',true),
        ];
    }
}
 