<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['id','name','mobile','email','password','address1','address2','address3'];
    public function addresses()
    {
        return $this->hasMany(address::class);
    }
}
