<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use \Sushi\Sushi;

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $rows = [
        ['id' => 'admin', 'label' => 'Admin'],
        ['id' => 'operations', 'label' => 'Operations'],
    ];
}
