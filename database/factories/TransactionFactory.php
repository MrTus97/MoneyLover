<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'group_id' => Group::all()->random()->id,
            'amount' => fake()->numberBetween(0, 2147483647),
            'description' =>  fake()->text(),
            'wallet_id' => Wallet::all()->random()->id,
        ];
    }
}
