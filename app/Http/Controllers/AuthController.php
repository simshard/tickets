<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use App\Http\Requests\ApiLoginRequest;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(ApiLoginRequest $request)
    {
        //return $this->ok('Hello, Login!');
         //return response()->json(['message' => 'Hello API login !'], 200);
        // return $this->success('Hello, my Login!');
        return $this->success($request->all());
       
    }

    public function register(Request $request)
    {
        return $this->ok('Hello, Register!');
    }
}
