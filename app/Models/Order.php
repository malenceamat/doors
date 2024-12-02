<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','entity_item_id'];

    protected $table = 'order';

    public function user_order()
    {
        return $this->belongsTo(User::class);
    }
    public function entity_order()
    {
        return $this->belongsTo(EntityItem::class);
    }
}
