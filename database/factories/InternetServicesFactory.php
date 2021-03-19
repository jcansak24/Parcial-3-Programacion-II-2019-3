<?php

namespace Database\Factories;

use App\Models\InternetServices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InternetServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InternetServices::class;

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
            'slug' => Str::slug($name),
            'speed' => $this->faker->intval(),
            'prize' => $this->faker->doubleval(),
        ];
    }
}
