<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request["limit"] ?? 10;
        $users = User::simplepaginate($limit);
        return response()->json([
            'res'   => true,
            'data'  => $users
        ],200);
    }
}
