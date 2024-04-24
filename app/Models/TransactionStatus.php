<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class TransactionStatus extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Invalid', 'icon' => 'icon.x-mark'],
        ['id' => 2, 'name' => 'Cancelled', 'icon' => 'icon.x-circle'],
        ['id' => 3, 'name' => 'Pending', 'icon' => 'icon.clock'],
        ['id' => 4, 'name' => 'Refund', 'icon' => 'icon.receipt-refund'],
        ['id' => 5, 'name' => 'Completed', 'icon' => 'icon.check'],
    ];
}

