<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email_primary',
        'email_invoice',
        'street_address',
        'city',
        'state',
        'zip',
        'phone_primary',
        'notes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }

    public function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => $this->first_name.' '.$this->last_name
        );
    }

    public function cityState(): Attribute
    {
        return new Attribute(
            get: fn () => $this->city.', '.Str::ucfirst($this->state)
        );
    }

    public function customerSince(): Attribute
    {
        return new Attribute(
            get: fn () => $this->created_at->diffForHumans()
        );
    }
}
