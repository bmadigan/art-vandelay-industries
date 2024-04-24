<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Money\Currency;
use Money\Money;

class Order extends Model
{
    use HasFactory;

    protected $with = ['customer', 'user', 'orderItems', 'orderType', 'orderStatus', 'shipments'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_number',
        'order_type',
        'order_status',
        'po_employee_id',
        'po_number',
        'customer_id',
        'total_order_items_price',
        'discount',
        'shipping_cost',
        'total_amount',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'po_employee_id' => 'integer',
        'customer_id' => 'integer',
        'user_id' => 'integer',
    ];

    protected function totalAmount(): Attribute
    {
        return Attribute::make(
            get: function (int $value) {
                return new Money($value, new Currency('USD'));
            },
        );
    }

    protected function orderDate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->created_at->format(' F d, Y')
        );
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderType(): BelongsTo
    {
        return $this->belongsTo(OrderType::class, 'order_type');
    }

    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'order_status');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }
}
