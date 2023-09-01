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

    public function finances(): HasMany
    {
        return $this->hasMany(Finance::class);
    }

    public function vendors(): HasMany
    {
        return $this->hasMany(Vendor::class);
    }

    public function customerAdresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
