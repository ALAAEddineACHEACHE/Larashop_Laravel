<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group Auth Group
 * APIs for managing authentification
 */
class AuthController extends Controller
{
    /**
     * register
     *
     * API for register
     * @bodyParam name string required The name of the user. Example:John Doe
     * @bodyParam email string required the email of the user. Example:john@doe.com
     * @bodyParam password string required the password of the user. Example:123456
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $tokenResult = $user->createToken('Personnal Access');
        $token = $tokenResult->token;
        $token->save();
        return response()->json([
            'status' => 200,
            'message' => 'User save successfully',
            'token' => $tokenResult->accessToken,
            'token_type' => 'Bearer'
        ]);
    }
}
