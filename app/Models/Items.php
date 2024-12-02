<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = ['name','category_id','id_1c','description','is_active','is_new_items','is_stock','is_popular','npp'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function entity()
    {
        return $this->hasMany(EntityItem::class);
    }

    public function getIsFavoritedAttribute()
    {
        if(Auth::check()) {
            return $this->favorites()->where('user_id', Auth::id())->exists();
        }
        return false;
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class,'item_id','id');
    }
}
