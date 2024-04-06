<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class OrderStatus extends Model
{
    use Sushi\sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Pending'],
        ['id' => 2, 'name' => 'Processing'],
        ['id' => 3, 'name' => 'Shipped'],
        ['id' => 4, 'name' => 'Delivered'],
        ['id' => 5, 'name' => 'Canceled'],
    ];
}
