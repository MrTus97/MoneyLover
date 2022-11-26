<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->name(),
            'description' =>  fake()->text(),
            'icon' => fake()->link(),
            'type' => fake()->numberBetween(0, 2),
            'walled_id' => Wallet::all()->random()->id,
            'parrent_id' => Group::all()->random()->id,
        ];
    }
}
