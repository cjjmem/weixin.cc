<?php

/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 4/3/16
 * Time: 12:24 AM
 */

function response_api_success($message, $data = null) {
    return response_api(true, $message, $data);
}

function response_api_failure($message, $data = null) {
    return response_api(false, $message, $data);
}

function response_api($success, $message, $data = null) {
    $response = array();
    $response['success'] = $success;
    $response['message'] = $message;
    if ($data != null) {
        $response['data'] = $data;
    }
    return $response;
}