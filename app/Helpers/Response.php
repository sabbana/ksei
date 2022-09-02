<?php

if (! function_exists('response_data')) {
    function response_data($data, $message = "") {
      return array(
        'meta'=>array(
          'code' => 200,
          'status' => true,
          'message' => $message
        ),
        'data'=>$data
      );
    }
}

if (! function_exists('response_detail')) {
    function response_detail($data, $message = "") {
      return array(
        'meta'=>array(
          'code' => 200,
          'status' => true,
          'message' => $message
        ),
        'data'=>array(
          'detail'=>$data
        )
      );
    }
}

if (! function_exists('response_list')) {
    function response_list($data, $pagination, $message = "") {
      return array(
        'meta'=>array(
          'code' => 200,
          'status' => true,
          'message' => $message
        ),
        'data'=>array(
          'list'=>$data,
          'pagination'=> $pagination
        )
      );
    }
}

if (! function_exists('response_meta')) {
    function response_meta($code,$status,$message,$errors = []) {
      return array(
        'meta'=>array(
          'code' => $code,
          'status' => $status,
          'message' => $message,
          'errors' => $errors
        )
      );
    }
}

if (! function_exists('response_error')) {
  function response_error($code,$status,$message,$errors) {
    return array(
      'meta'=>array(
        'code' => $code,
        'status' => $status,
        'message' => $message,
        'errors' => $errors
      )
    );
  }
}
