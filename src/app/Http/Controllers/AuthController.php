<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    } //

    public function register(AuthRequest $request)
    {
        // バリデーション済みデータを取得
        $validatedData = $request->validated();

        return response()->json([
            'data' => $validatedData,
        ]);
    }
}
