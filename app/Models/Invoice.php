<?php

namespace App\Models;

use App\Enums\Enums\InvoiceStatusType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'status' => InvoiceStatusType::class
        ];
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
