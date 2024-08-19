<?php


namespace App\Helpers;

class ResponseHelper
{
    public static function respondWithSuccess($data = "operation Success")
    {
        return response()->json(['status' => 'OK', 'data' => $data], 200);
    }

    public static function respondWithCreated($data = null)
    {
        return response()->json(['status' => 'OK', 'data' => $data], 201);
    }

    public static function respondWithMissingParameter($message = "Missing Required Param")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 400);
    }

    public static function respondWithDataNotFound($message = "Data Not Found")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 404);
    }

    public static function respondWithAlreadyExists($message = "Already Exists")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 400);
    }

    public static function respondWithAuthorizationFailure($message = "Not Authorized")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 401);
    }

    public static function respondWithAuthenticationFailure($message = "Authentication Fail")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 401);
    }

    public static function respondWithInvalidData($message = "Invalid Data")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 401);
    }

    public static function respondWithOperationFailure($message = "operation Fail")
    {
        return response()->json(['status' => 'ERROR', 'message' => $message], 500);
    }
}
