<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class OrderStatus extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Pending'],
        ['id' => 2, 'name' => 'Processing'],
        ['id' => 3, 'name' => 'Paid'],
        ['id' => 4, 'name' => 'Shipped'],
        ['id' => 5, 'name' => 'Delivered'],
        ['id' => 6, 'name' => 'Canceled'],
    ];
}
