<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'description' => $this->faker->text(),
            'requirement' => $this->faker->realText(),
            'content' => $this->faker->realText(),
            'learn_time' => rand(1, 4),
            'course_id' => rand(1, 200),
        ];
    }
}
