<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Wallet;
use Exception;
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
        $parrentId = null;
        try {
            $parrentId = Group::all()->random()->id;
        } catch(Exception $e) {
            $parrentId = null;
        }
        return [
            'name' => fake()->unique()->name(),
            'description' =>  fake()->text(),
            'icon' => fake()->name(),
            'type' => fake()->numberBetween(0, 2),
            'wallet_id' => Wallet::all()->random()->id,
            'parrent_id' => $parrentId,
        ];
    }
}
