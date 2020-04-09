<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'master_id', 'date'
    ];
    public function master()
    {
        return $this->belongsTo(Master::class)->withDefault();
    }
}
