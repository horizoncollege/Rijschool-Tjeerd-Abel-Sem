<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'goal' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['planned', 'completed', 'cancelled']),
            'start_date' => $this->faker->time('H:i'),
            'end_date' => $this->faker->time('H:i'),
            'day_of_month' => $this->faker->date(now()),
            'teacher_id' => $this->faker->numberBetween(1, 2),
            'address' => $this->faker->address,
        ];
    }
}
