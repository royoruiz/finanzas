<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accounts>
 */
class AccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank' => $this->faker->randomNumber(4, true),
            'office' => $this->faker->randomNumber(4, true),
            'dc' => $this->faker->randomNumber(2, true),
            'account' => $this->faker->numberBetween(0, 9999999999),
            'iban' => 'ES'.$this->faker->randomNumber(2,true),
            'account_name' => $this->faker->name,
            'type_id' => $this->faker->numberBetween(1, 3)

        ];
    }
}
