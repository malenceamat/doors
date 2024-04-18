<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayDelivery extends Model
{
    use HasFactory;

    protected $table = 'pay_deliveries';

    protected $fillable = ['text'];
}
