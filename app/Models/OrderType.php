<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class OrderType extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Purchase Order'],
        ['id' => 2, 'name' => 'Customer Order'],
    ];
}
