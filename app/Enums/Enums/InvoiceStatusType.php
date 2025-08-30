<?php

namespace App\Enums\Enums;

enum InvoiceStatusType: string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case OVERDUE = 'overdue';
}
