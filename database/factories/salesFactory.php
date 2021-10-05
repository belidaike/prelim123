<?php

namespace Database\Factories;

use App\Models\sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class salesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'BrandName' => $this->faker->word,
        'Stocks' => $this->faker->word,
        'Date' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
