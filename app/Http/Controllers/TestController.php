<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
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
