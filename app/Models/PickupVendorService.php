<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PickupVendorService extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
