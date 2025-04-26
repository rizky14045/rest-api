<?php 

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper {
    
    public static function response($message,$errors,$data,$code_status): JsonResponse{

        return response()->json([
            'message' => $message, // pesan error
            'data' => $data, // data
            'errors' => $errors // pesan error message
        ], $code_status);

    }
}