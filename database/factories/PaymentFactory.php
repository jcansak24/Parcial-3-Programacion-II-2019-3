<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'slug' => Str::slug($name),
            'packages_id' => Package::all()->random()->id(),
            'users_id' => User::all()->random()->id(),
        ];
    }
}
