<?php
/**
 * 用户Controller
 * User: chaogao
 * Date: 3/16/16
 * Time: 10:31 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Manager\CreateRequest;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    private $_userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->_userRepository = $userRepository;
    }

    /**
     * 添加管理员
     */
    public function getManagerCreate() {
        return admin_view('Users.Manager.create');
    }

    /**
     * 保存管理员
     * @param CreateRequest $request
     * @return mixed
     */
    public function postManagerCreate(CreateRequest $request) {
        $this->_userRepository->createAdmin($request);
        return admin_view('Users.Manager.create')->withMessage($request->get('username').'用户添加成功！');
    }

    /**
     * 管理用户列表
     */
    public function getManagerList() {
        $users = $this->_userRepository->adminLists();
        return admin_view('Users.Manager.list', compact('users'));
    }

    public function getShopList() {
        $users = $this->_userRepository->shopLists();
        return admin_view('Users.Shop.list', compact('users'));
    }

    public function getCustomerCreate() {
        return admin_view('Users.Customer.create');
    }

    /**
     * 会员用户列表
     */
    public function getCustomerList() {
        return admin_view('Users.Customer.list');
    }
}