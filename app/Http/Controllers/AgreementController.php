<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgreementController extends Controller
{
    public function index()
    {
        return  Agreement::where('status', 1)->where('product_id', 53)->get();
        //DB::connection('mysql2')->table('agreement_lines')->where([['status', 1], ['product_id',3]])->get();


    }

    public function storeLocal()
    {
       foreach ($this->index() as $value) {
           return $value;
       }
    }
}
