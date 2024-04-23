<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsValue extends Model
{
    use HasFactory;

    protected $table = 'stats_values';

    public function stats_value_items()
    {
        return $this->hasOne(ItemsStats::class, 'stats_values_id');
    }
}
