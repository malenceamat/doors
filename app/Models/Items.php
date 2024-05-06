<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Items extends Model
{
    use HasFactory;

    protected $table = 'items';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function entity()
    {
        return $this->hasMany(EntityItem::class);
    }
}
