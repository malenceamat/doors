<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityItem extends Model
{
    use HasFactory;

    protected $table = 'entity_items';

    public function etity_items()
    {
        return $this->belongsTo(Items::class);
    }
    public function items_stats()
    {
        return $this->hasMany(ItemsStats::class);
    }
}
