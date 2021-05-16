<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucfirst(rtrim($this->faker->words(3, true), '.')),
            'about' => $this->faker->text(300),
            'platform' => 'PC',
            'trailers' => null,
            'system_requirements' => null,
            'activation_service_id' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->numberBetween(20, 3500),
            'discount' => $this->faker->randomDigitNotNull,
            'released_at' => $this->faker->dateTimeBetween('-15 years', '+3 year'),
        ];
    }
}
