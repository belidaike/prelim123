<?php

namespace Database\Factories;

use App\Models\pricing;
use Illuminate\Database\Eloquent\Factories\Factory;

class pricingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pricing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Small' => $this->faker->word,
        'Medium' => $this->faker->word,
        'Large' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
