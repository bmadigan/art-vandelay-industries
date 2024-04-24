<?php

namespace App\Livewire\Pages\Orders;

use App\Enums\DateRange;
use Livewire\Form;

class Filters extends Form
{
    public DateRange $range = DateRange::All_Time;

    public $start;

    public $end;

    public function apply($query)
    {
        // Use this in case we need more filters later
        return $this->applyRange($query);
    }

    public function applyRange($query)
    {
        if ($this->range === DateRange::All_Time) {
            return $query;
        }

        return $query->whereBetween('created_at', $this->range->dates());
    }
}
