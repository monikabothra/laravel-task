<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(order::class);
    }
}
