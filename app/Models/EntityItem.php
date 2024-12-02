<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityItem extends Model
{
    use HasFactory;

    protected $table = 'entity_items';

    protected $fillable = ['items_id'];

    public function etity_items()
    {
        return $this->belongsTo(Items::class);
    }
    public function items_stats()
    {
        return $this->hasMany(ItemsStats::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class,'entity_item_id','id');
    }
}
