<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'transportation_type',
        'tracking_number',
        'carrier',
        'scheduled_date',
        'actual_date',
        'shipment_status',
        'order_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'scheduled_date' => 'datetime',
        'actual_date' => 'datetime',
        'order_id' => 'integer',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function transportationType(): BelongsTo
    {
        return $this->belongsTo(TransportationType::class, 'transportation_type');
    }

    protected function scheduledDeliveryDate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->scheduled_date->format(
                $this->scheduled_date->year === now()->year
                    ? 'M d, g:i A'
                    : 'M d, Y, g:i A'
            )
        );
    }

    protected function actualDeliveryDate(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->actual_date->format(
                $this->actual_date->year === now()->year
                    ? 'M d, g:i A'
                    : 'M d, Y, g:i A'
            )
        );
    }
}
