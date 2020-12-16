<?php 


    function build_api($data, $statusCode=200) {
        try {

            return response()->json([
                'code'=>200,
                $data
            ], $statusCode);

        } catch (\Exception $e) {

            return response()->json([
                'code'=>200,
                 $data,
                'message' => $e
            ], $statusCode);
        }
    }

?>