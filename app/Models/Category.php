<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name', 'parent_id','id_1c'];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id','id_1c');
    }

    public function sub_category()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function items()
    {
        return $this->hasMany(Items::class, 'category_id', 'id');
    }
}
