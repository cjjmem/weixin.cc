<?php

function admin_view($name) {
    $args = func_get_args();
    $args[0] = 'admin.'.$name;
    return call_user_func_array('view', $args);
}

function web_view($name) {
    $args = func_get_args();
    $args[0] = 'web.'.$name;
    return call_user_func_array('view', $args);
}