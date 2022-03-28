<?php

namespace App\Http\Controllers;

use App\Models\AgreementLine;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgreementController extends Controller
{
    public function index()
    {
        return  AgreementLine::where('line_status', 1)->where('product_id', 62)->get();
        //DB::connection('mysql2')->table('agreement_lines')->where([['status', 1], ['product_id',3]])->get();
    }

    public function storeLocal()
    {
        $agreements = $this->index();
        if ($agreements->count() === 0) {
            return "No";
        }else {
            foreach ($agreements as $value) {
                $new_payment = new Payment();
                $new_payment->agreement_id      = $value->agreement_id;
                $new_payment->agreement_line_id = $value->id;
                $new_payment->customer_id       = $value->agreement->customer_id;//Relationship
                $new_payment->member_id         = $value->members_id;
                $new_payment->amount            = $value->total_ttc;
                $new_payment->payment_method_id = $value->payment_method_id;
                $new_payment->due_date          = $value->agreement->due_date;
                $new_payment->email             = $value->agreement->customer->email;//Relationship
                $new_payment->phone             = $value->agreement->customer->phone;//Relationship
                $new_payment->user_id           = 1;
                $new_payment->payment_status_id = 1;
                $new_payment->save();
            }
        }
    }
}
