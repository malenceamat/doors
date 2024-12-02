<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_id'];

    public function user_favorites()
    {
        return $this->belongsTo(User::class);
    }

    public function items_favorites()
    {
        return $this->belongsTo(Items::class);
    }



}
