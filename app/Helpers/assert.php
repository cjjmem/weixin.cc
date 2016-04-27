<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 4/23/16
 * Time: 11:17 AM
 */

/**
 * 安全的断言
 * @param $assertion
 * @param $description
 */
function safeAssert($assertion, $description) {
    if (env('APP_ENV', null) == 'local') {
        //启动断言
        assert($assertion, $description);
    }
}