<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    
    protected $table = 'management_locations';
    
    protected $primaryKey = 'id';

    public $incrementing = true;

    public function carUnits(): HasMany
    {
        return $this->hasMany(CarUnit::class);
    }
}
