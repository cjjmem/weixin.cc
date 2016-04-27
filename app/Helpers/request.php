<?php

function get_user_agent($request) {
    return $request->header('user-agent');
}

function is_pc_client($request) {

}

function is_android_client($request) {
    return string_contain(get_user_agent($request), 'Android');
}

function is_ios_client($request) {
    return string_contain(get_user_agent($request), 'iPhone');
}

function is_iphone_client($request) {

}

function is_ipad_client($request) {

}

function is_app_client($request) {

}

function is_wechat_client($request) {
    return string_contain(get_user_agent($request), 'MicroMessenger');
}

