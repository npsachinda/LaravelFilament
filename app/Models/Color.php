<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    protected $fillable = [
        'name',
        'description',
        'hex_code',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
