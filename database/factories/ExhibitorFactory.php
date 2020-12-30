<?php

namespace Database\Factories;

use App\Models\Exhibitor;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExhibitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = exhibitor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $regions = Region::all();

        return [
            'company_name' => $this->faker->company,
            'link' => $this->faker->url,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'is_draft' => $this->faker->boolean,
            'region_id' => $regions->random()->id,
        ];
    }
}
