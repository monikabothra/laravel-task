<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = ['id','customer_id','address1','address2','address3'];

    public function customer()
    {
        return $this->belongsTo(customer::class,'customer_id');
    }
}
