<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 3/10/16
 * Time: 9:23 PM
 * 工具函数
 */

/******* Admin START *********/
function admin_url($uri) {
    return url('admin/'.$uri);
}

function admin_css_url($uri) {
    return asset('asset/admin/css/' . $uri);
}

function admin_js_url($uri) {
    return asset('asset/admin/js/' . $uri);
}

function admin_image_url($uri) {
    return asset('asset/admin/images/' . $uri);
}
/******* Admin END *********/

/******* Web START *********/
function web_url($uri) {
    return url('web/'.$uri);
}

function web_css_url($uri) {
    return asset('asset/web/themes/' . $uri);
}

function web_js_url($uri) {
    return asset('asset/web/themes/js/' . $uri);
}

function web_image_url($uri) {
    return asset('asset/web/themes/' . $uri);
}
/******* Web END *********/
