<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

    public function sendError($errorMessages, $errorData = [], $code = 403)
    {
        $response = [
            'success' => false,
            'message' => $errorMessages,
        ];

        if (!empty($errorData)) {
            $response['data'] = $errorData;
        }

        return response()->json($response, $code);
    }
}
