<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipmentStatus extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected array $rows = [
        ['id' => 1, 'name' => 'Pending', 'color' => 'bg-amber-200 text-amber-800'],
        ['id' => 2, 'name' => 'On-Route', 'color' => 'bg-indigo-200 text-indigo-800'],
        ['id' => 3, 'name' => 'Delivered', 'color' => 'bg-lime-200 text-lime-800'],
        ['id' => 4, 'name' => 'Canceled', 'color' => 'bg-rose-200 text-rose-800'],
    ];
}
