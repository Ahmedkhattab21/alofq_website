<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = [
            ['id' => 1, 'name' => 'ahmed'],
            ['id' => 2, 'name' => 'omar'],
            ['id' => 3, 'name' => 'ali'],
        ];

        return response()->json([
            'data' => [
                'code' => 200,
                'message' => 'done',
                'data' => $users,
            ],
        ]);
    }
}
