<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    /**
     * 显示指定用户的个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        echo 2;
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }


}
