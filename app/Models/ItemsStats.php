<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsStats extends Model
{
    use HasFactory;

    protected $table = 'items_stats';

    public function stats_item()
    {
        return $this->belongsTo(Items::class, 'item_id');
    }
    public function stats_name()
    {
        return $this->belongsTo(StatsName::class, 'stats_name_id');
    }
    public function stats_value()
    {
        return $this->belongsTo(StatsValue::class, 'stats_value_id');
    }
}
