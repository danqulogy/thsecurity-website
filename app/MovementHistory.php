<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementHistory extends Model
{
    protected $table = 'movement_historys';

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

}
