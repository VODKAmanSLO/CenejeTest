<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'country_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
