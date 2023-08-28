<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function zipCodes(): HasMany
    {
        return $this->hasMany(ZipCode::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
