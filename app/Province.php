<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $dates = ['created_at', 'deleted_at'];

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
