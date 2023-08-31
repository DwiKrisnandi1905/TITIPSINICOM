<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function customerAddresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
