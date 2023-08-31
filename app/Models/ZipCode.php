<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ZipCode extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function admins(): HasMany
    {
        return $this->hasMany(Admin::class);
    }

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
