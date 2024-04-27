<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class TransportationType extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Truck Freight', 'color' => 'bg-lime-200 text-lime-800'],
        ['id' => 2, 'name' => 'Air Freight', 'color' => 'bg-blue-200 text-blue-800'],
        ['id' => 3, 'name' => 'Ocean Freight', 'color' => 'bg-sky-200 text-sky-800'],
        ['id' => 4, 'name' => 'Rail Freight', 'color' => 'bg-stone-200 text-stone-800'],
        ['id' => 5, 'name' => 'Courier', 'color' => 'bg-amber-200 text-amber-800'],
    ];
}
