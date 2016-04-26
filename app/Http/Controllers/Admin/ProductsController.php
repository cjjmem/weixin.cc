<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 3/17/16
 * Time: 8:38 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Product\CreateRequest;
use App\Repositories\Products\BrandRepository;
use App\Repositories\Products\CategoryRepository;
use App\Repositories\Products\ProductRepository;

class ProductsController extends Controller
{
    private $productRepository = null;
    private $categoryRepository = null;
    private $brandRepository = null;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        BrandRepository $brandRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
    }

    public function getList() {
        $categories = $this->categoryRepository->fetchAll();
        $brands = $this->brandRepository->fetchAll();
        $products = $this->productRepository->fetchProduct(ProductRepository::OFFLINE_PRODUCT);

        return admin_view('Products.list',
            compact(
                'categories', $categories,
                'brands', $brands,
                'products', $products
            ));
    }

    public function getCreate($message = null) {
        $categoryNames = $this->getCategoryNames();
        $brandNames = $this->getBrandNames();

        return admin_view(
            'Products.edit',
            compact(
                'categoryNames', $categoryNames,
                'brandNames', $brandNames
            )
        )->withMessage($message);
    }

    public function postCreate(CreateRequest $request) {
        $product = $this->productRepository->storeProduct($request);
        return $this->getCreate($product->name.'商品添加成功！');
    }

    public function getCategoryList() {
        $categories = $this->categoryRepository->fetchAll();
        return admin_view('Products.Category.list', compact("categories", $categories));
    }

    public function getBrandList() {
        $brands = $this->brandRepository->fetchAll();
        return admin_view('Products.Brand.list', compact("brands", $brands));
    }

    //Getter
    private $categoryNames = null;
    private function getCategoryNames() {
        if ($this->categoryNames == null) {
            $categories = $this->categoryRepository->fetchAll();
            $this->categoryNames = filter_names($categories);
            unset($categories);
        }
        return $this->categoryNames;
    }

    private $brandNames = null;
    private function getBrandNames() {
        if ($this->brandNames == null) {
            $brands = $this->brandRepository->fetchAll();
            $this->brandNames = filter_names($brands);
            unset($brands);
        }
        return $this->brandNames;
    }
}