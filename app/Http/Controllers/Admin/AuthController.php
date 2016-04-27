<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\User\Manager\LoginRequest;
use App\Http\Requests\Admin\User\Manager\RegisterRequest;
use App\Repositories\UserRepository;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 3/11/16
 * Time: 5:11 PM
 */

class AuthController extends Controller {

    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getLogin(Request $request) {
        $redirect = $request->get('redirect', admin_url('/'));
        if (Auth::check()) {
            return redirect($redirect);
        }
        return admin_view('auth.login', compact('redirect'));
    }

    public function postLogin(LoginRequest $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect($request->get('redirect', admin_url('/')));
        }

        return redirect()->back()->withInput($request->except("password"))->withErrors([
            'username' => '用户名或密码错误！',
        ]);
    }

    public function getRegister(Request $request) {
        $redirect = $request->get('redirect', admin_url('/'));
        if (Auth::check()) {
            return redirect($redirect);
        }
        return admin_view('auth.register', compact('redirect'));
    }

    public function postRegister(RegisterRequest $request) {
        $this->userRepository->store($request);

        Auth::login($this->userRepository->getModel());

        return redirect($request->get('redirect', admin_url('/')));
    }

    public function getLogout() {
        Auth::logout();
        return redirect(admin_url('auth/login'))->withMessage('您已经注销登录！');
    }
}