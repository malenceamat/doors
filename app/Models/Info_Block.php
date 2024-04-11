<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_Block extends Model
{
    use HasFactory;

    protected $table = 'info_blocks';

    protected $fillable = ['image','title','subtitle'];
}
