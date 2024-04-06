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
            'email_primary' => $this->faker->safeEmail(),
            'email_invoice' => $this->faker->safeEmail(),
            'street_address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),
            'zip' => $this->faker->postcode(),
            'phone_primary' => $this->faker->avMobileNumber(),
            'notes' => $this->faker->text(),
        ];
    }
}
