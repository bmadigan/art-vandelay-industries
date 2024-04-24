<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Shipment;
use App\Models\TransactionStatus;
use App\Models\TransportationType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $order = Order::inRandomOrder()->first();

        return [
            'customer_id' => $order->customer_id,
            'transportation_type' => TransportationType::inRandomOrder()->first()->id,
            'tracking_number' => 'TRK-'.Str::upper(Str::random(10)),
            'carrier' => $this->faker->randomElement(['FedEx', 'UPS', 'USPS', 'DHL']),
            'scheduled_date' => $order->created_at->addDays($this->faker->numberBetween(1, 3)),
            'actual_date' => $order->created_at->addDays($this->faker->numberBetween(2, 10)),
            'shipment_status' => TransactionStatus::inRandomOrder()->first()->id,
            'order_id' => $order->id,
        ];
    }
}
