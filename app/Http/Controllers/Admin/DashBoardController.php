<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 3/16/16
 * Time: 10:41 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function getIndex() {
        return view('admin.index');
    }
}