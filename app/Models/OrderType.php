<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class OrderType extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected array $rows = [
        ['id' => 1, 'name' => 'Purchase Order', 'color' => 'bg-sky-200 text-sky-800'],
        ['id' => 2, 'name' => 'Customer Order', 'color' => 'bg-lime-200 text-lime-700'],
    ];
}
