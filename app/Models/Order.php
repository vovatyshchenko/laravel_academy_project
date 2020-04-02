<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'tel', 'master', 'service', 'date', 'time', 'price', 'status'
    ];
}
