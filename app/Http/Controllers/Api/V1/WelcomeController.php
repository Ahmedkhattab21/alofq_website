<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class WelcomeController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => [
                'code' => 200,
                'message' => 'Welcome to Alofq API.',
            ],
        ]);
    }
}
