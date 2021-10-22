<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function users()
    {
        $users = User::all();
        return response()->json([
            'status' => 200,
            'message' => 'All users data',
            'data' => $users
        ]);
    }
}
