<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function index(Request $request)
    {
        $agreement = Agreement::all();
        return response()->json([
            'res'   => true,
            'data'  => $agreement
        ], 200);
    }
}
