<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function products()
    {
        return $this->belongsToMany(product::class);
    }
}
