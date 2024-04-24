<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\OrderType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first()->id;
        $createdAt = $this->faker->dateTimeBetween('-2 years', 'now');

        return [
            'order_number' => 'ORD-'.$this->generateCode(),
            'order_type' => OrderType::inRandomOrder()->first()->id,
            'order_status' => OrderStatus::inRandomOrder()->first()->id,
            'po_employee_id' => $user,
            'po_number' => 'PO-'.Str::upper(Str::random(10)),
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'total_order_items_price' => $this->faker->numberBetween(1000, 99999),
            'discount' => $this->faker->randomElement(['0', '5', '0', '0', '8', '10', '0']),
            'shipping_cost' => $this->faker->numberBetween(1000, 99999),
            'total_amount' => $this->faker->numberBetween(1000, 99999),
            'user_id' => $user,
            'created_at' => $createdAt,
        ];
    }

    protected function generateCode()
    {
        $numberPart = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
        $letterPart = chr(rand(65, 90)).chr(rand(65, 90));
        $finalPart = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        return $numberPart.'-'.$letterPart.$finalPart;
    }
}
