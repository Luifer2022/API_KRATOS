<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function index(Request $request)
    {

        $users = Agreement::all();
        return response()->json([
            'res'   => true,
            'data'  => $users
        ], 200);
    }
}
