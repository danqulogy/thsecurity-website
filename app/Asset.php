<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table='assets';
    protected $fillable = [
      'item_name',
        'weight',
        'date_of_deposit',
        'time_of_deposit',
        'date_of_withdrawal',
        'depositor_name',
        'beneficiary_name',
        'amount',
        'vault_number'
    ];

    public function movements(){
        return $this->hasMany(MovementHistory::class);
    }
}
