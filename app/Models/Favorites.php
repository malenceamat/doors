<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = ['user_id','entity_item_id'];

    public function users_favorites()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
