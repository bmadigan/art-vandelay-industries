<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->avRandomFirstName(),
            'last_name' => $this->faker->avLastName(),
            'email_primary' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'email_invoice' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'street_address' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'city' => $this->faker->city(),
            'state' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'zip' => $this->faker->postcode(),
            'phone_primary' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'notes' => $this->faker->text(),
        ];
    }
}
