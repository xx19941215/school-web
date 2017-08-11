<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
