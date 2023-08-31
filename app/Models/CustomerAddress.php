<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerAddress extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function zipCode(): BelongsTo
    {
        return $this->belongsTo(ZipCode::class);
    }
}
