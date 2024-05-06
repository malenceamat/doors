<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsStats extends Model
{
    use HasFactory;

    protected $table = 'items_stats';

    protected $fillable = ['entity_item_id','stats_name_id','stats_value_id'];

    public function entity_items()
    {
        return $this->belongsTo(EntityItem::class, 'entity_id');
    }
    public function stats_name()
    {
        return $this->belongsTo(StatsName::class);
    }
    public function stats_value()
    {
        return $this->belongsTo(StatsValue::class);
    }
}
