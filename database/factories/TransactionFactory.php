<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Transaction;
use App\Models\User;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'transaction_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'order_id' => $this->faker->randomNumber(),
            'customer_id' => $this->faker->randomNumber(),
            'transaction_employee_id' => $this->faker->randomNumber(),
            'transaction_status' => $this->faker->numberBetween(-10000, 10000),
            'transaction_amount' => $this->faker->numberBetween(-10000, 10000),
            'transaction_date' => $this->faker->dateTime(),
            'user_id' => User::factory(),
        ];
    }
}
