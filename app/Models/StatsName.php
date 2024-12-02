<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsName extends Model
{
    use HasFactory;

    protected $table = 'stats_names';

    protected $fillable = ['stats_names'];

    public function stats_name_items()
    {
        return $this->belongsTo(ItemsStats::class);
    }
}
