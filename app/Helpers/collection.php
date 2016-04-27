<?php

/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 4/3/16
 * Time: 11:33 PM
 * 提取所有的 name 字段
 * @param $collections
 * @return array
 */
function filter_names($collections) {
    $names = array();
    foreach ($collections as $collection) {
        $names[] = $collection->name;
    }
    return $names;
}