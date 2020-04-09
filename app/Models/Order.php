<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'tel', 'master_id', 'service', 'date', 'time', 'price',
    ];

    public function master()
    {
        return $this->belongsTo(Master::class)->withDefault();
    }
}
