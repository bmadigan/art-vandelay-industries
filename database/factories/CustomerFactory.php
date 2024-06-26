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
        $createdAt = $this->faker->dateTimeBetween('-3 years', 'now');

        return [
            'first_name' => $this->faker->avRandomFirstName(),
            'last_name' => $this->faker->lastName(),
            'email_primary' => $this->faker->safeEmail(),
            'email_invoice' => $this->faker->safeEmail(),
            'street_address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => $this->faker->randomElement(['USA', 'Canada']),
            'zip' => $this->faker->postcode(),
            'phone_primary' => $this->faker->avMobileNumber(),
            'notes' => $this->faker->text(),
            'created_at' => $createdAt,
        ];
    }


}
