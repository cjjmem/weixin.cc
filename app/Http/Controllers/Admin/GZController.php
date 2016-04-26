<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

/**
 * 公众号Controller
 * User: chaogao
 * Date: 3/16/16
 * Time: 10:15 PM
 */

class GZController extends Controller {

    public function getSetting() {
        return admin_view('GZ.setting');
    }

    public function getGroupMessage() {
        return admin_view('GZ.groupMessage');
    }

    public function getAutoReply() {
        return admin_view('GZ.autoReply');
    }

    public function getCustomMenu() {
        return admin_view('GZ.customMenu');
    }

    public function getManagerMessage() {
        return admin_view('GZ.managerMessage');
    }

    public function getManagerUser() {
        return admin_view('GZ.managerUser');
    }
}