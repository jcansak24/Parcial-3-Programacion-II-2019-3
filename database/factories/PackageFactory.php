<?php

namespace Database\Factories;

use App\Models\InternetServices;
use App\Models\Package;
use App\Models\TelephoneServices;
use App\Models\TVServices;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

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
            'internet_services_id' => InternetServices::all()->random()->id(),
            'telephone_services_id' => TelephoneServices::all()->random()->id(),
            'tv_services_id' => TVServices::all()->random()->id(),
        ];
    }
}
