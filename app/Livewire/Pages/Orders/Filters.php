<?php

namespace App\Livewire\Pages\Orders;

use App\Enums\DateRange;
use Livewire\Attributes\Url;
use Livewire\Form;

class Filters extends Form
{
    #[Url]
    public DateRange $range = DateRange::All_Time;

    public function apply($query)
    {
        // Use this in case we need more filters later
        return $this->applyRange($query);
    }

    public function applyRange($query)
    {
        if ($this->range->value === 'all') {
            return $query;
        }

        return $query->whereBetween('created_at', $this->range->dates());
    }
}
