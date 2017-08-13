<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
