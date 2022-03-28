<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'agreement';

    public function agreementLine()
    {
        return $this->hasMany(AgreementLine::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
