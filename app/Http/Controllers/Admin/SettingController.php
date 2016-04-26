<?php
/**
 * 设置Controller
 * User: chaogao
 * Date: 3/16/16
 * Time: 10:33 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function getPermit() {
        return admin_view('Setting.permit');
    }
}