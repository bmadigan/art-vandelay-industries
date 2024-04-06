<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class TransportationType extends Model
{
    use Sushi\sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Truck Freight'],
        ['id' => 2, 'name' => 'Air Freight'],
        ['id' => 3, 'name' => 'Ocean Freight'],
        ['id' => 4, 'name' => 'Rail Freight'],
        ['id' => 5, 'name' => 'Courier'],
    ];
}
