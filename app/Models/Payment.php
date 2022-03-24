<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $filable = [
        'agreement_id',
        'agreement_line_id',
        'customer_id',
        'menber_id',
        'amount',
        'payment_method_id',
        'due_date',
        'email',
        'phone',
        'user_id',
        'user_update_id',
        'delete_at',
        'payment_status_id',
        'payment_status_response_id'
    ];
}
