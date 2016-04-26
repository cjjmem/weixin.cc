<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 3/28/16
 * Time: 5:49 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shop\CreateRequest;
use App\Repositories\ShopRepository;

class ShopsController extends Controller
{
    private $_shopRepository;

    public function __construct(ShopRepository $shopRepository) {
        $this->_shopRepository = $shopRepository;
    }

    public function getCreate() {
        return admin_view('shop.create');
    }

    public function postCreate(CreateRequest $request) {
        $this->_shopRepository->create($request);
        return admin_view('shop.create')->withMessage($request->get('name').'店铺添加成功！');;
    }

    public function getList() {
        $shops = $this->_shopRepository->lists();
        return admin_view('shop.list', compact('shops'));
    }
}