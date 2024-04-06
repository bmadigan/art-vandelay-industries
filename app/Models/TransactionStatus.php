<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class TransactionStatus extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    protected $rows = [
        ['id' => 1, 'name' => 'Invalid'],
        ['id' => 2, 'name' => 'Cancelled'],
        ['id' => 3, 'name' => 'Pending'],
        ['id' => 5, 'name' => 'Completed'],
    ];
}

