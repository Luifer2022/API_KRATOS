<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementLine extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'agreement_lines';

    public function agreement()
    {
        return $this->belongsTo(Agreement::class);
    }
}
