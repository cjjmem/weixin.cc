<?php

/**
 * 是否包含字符串
 * @param $source
 * @param $find
 * @return bool
 */
function string_contain($source, $find) {
    if (strpos($source, $find) !== false) {
        return true;
    }
    return false;
}