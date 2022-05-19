<?php

namespace Database\Factories;

use App\Models\Practice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practice>
 */
class PracticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model = Practice::class;
    

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->email(),
            'logo' => $this->faker->image(),
            'website_url' => $this->faker->url(),
        ];
    }
}
