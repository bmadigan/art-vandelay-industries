<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use App\Models\TransactionStatus;
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
        $order = Order::inRandomOrder()->first();

        return [
            'transaction_number' => 'TRX-' . $this->generateCode(),
            'order_id' => $order->id,
            'customer_id' => $order->customer_id,
            'transaction_employee_id' => $order->po_employee_id,
            'transaction_status' => TransactionStatus::inRandomOrder()->first()->id,
            'transaction_amount' => $order->total_amount,
            'transaction_date' => $order->created_at,
            'user_id' => $order->user_id
        ];
    }

    protected function generateCode() {
        $numberPart = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
        $letterPart = chr(rand(65,90)) . chr(rand(65,90));
        $finalPart = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        return $numberPart . '-' . $letterPart . $finalPart;
    }
}
