<?php 


    // function build_api($data, $statusCode=200) {
    //     try {

    //         return response()->json([
    //             'code'=>200,
    //             $data
    //         ], $statusCode);

    //     } catch (\Exception $e) {

    //         return response()->json([
    //             'code'=>200,
    //              $data,
    //             'message' => $e
    //         ], $statusCode);
    //     }
    // }

    function api_error($returnCode, $message, $statusCode = 200){
        return response()->json([
            'code'=>$returnCode,
            'message'=>$message
        ], $statusCode);
    }

    function api_success($data, $statusCode=200) {
        // return response()->json(array_merge(['code'=>200, $data]), $statusCode);
        return response()->json(array_merge(['code'=>200,$data]),$statusCode);
    }
?>