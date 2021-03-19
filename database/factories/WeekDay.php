<?php

namespace Database\Factories;

use App\Models\WeeksDay;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WeekDayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WeeksDay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'slut' => Str::slug($name),
        ];
    }
}