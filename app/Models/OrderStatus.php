<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class OrderStatus extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected array $rows = [
        ['id' => 1, 'name' => 'Pending', 'color' => 'bg-yellow-200 text-yellow-800'],
        ['id' => 2, 'name' => 'Processing', 'color' => 'bg-indigo-200 text-indigo-800'],
        ['id' => 3, 'name' => 'Paid', 'color' => 'bg-green-200 text-green-800'],
        ['id' => 4, 'name' => 'Shipped', 'color' => 'bg-blue-200 text-blue-800'],
        ['id' => 5, 'name' => 'Delivered', 'color' => 'bg-lime-200 text-lime-800'],
        ['id' => 6, 'name' => 'Canceled', 'color' => 'bg-rose-200 text-rose-800'],
    ];
}
