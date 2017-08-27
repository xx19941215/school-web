<?php
namespace App;

use App\Scopes\DraftScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;

class School extends Model
{
    use SoftDeletes;

    protected $dates = ['published_at', 'created_at', 'deleted_at'];

    protected $fillable = [
        'name',
        'slug',
        'img',
        'content',
        'is_draft',
        'is_original',
        'published_at',
    ];

//    public static function boot()
//    {
//        parent::boot();
//        static::addGlobalScope(new DraftScope());
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function scopeHot($query)
    {
        return $query->orderBy('view_count', 'desc');
    }
}
