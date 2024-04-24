<?php

namespace App\Enums;

use Illuminate\Support\Carbon;

enum DateRange: string
{
    case All_Time = 'all';
    case Last_30 = 'last30';
    case Last_7 = 'last7';

    public function label($start = null, $end = null): string
    {
        return match ($this) {
            self::All_Time => 'All Time',
            self::Last_30 => 'Last 30 Days',
            self::Last_7 => 'Last 7 Days',
        };
    }

    public function dates(): array
    {
        return match ($this) {
            self::Last_7 => [Carbon::today()->subDays(6), now()],
            self::Last_30 => [Carbon::today()->subDays(29), now()],
        };
    }
}
