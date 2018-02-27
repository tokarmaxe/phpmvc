<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 24.02.2018
 * Time: 21:36
 */

//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';
//include_once ROOT.'/components/Pagination.php';

class CatalogController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();

        require_once (ROOT.'/views/catalog/index.php');

        return true;
    }
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');

        require_once (ROOT.'/views/catalog/category.php');

        return true;
    }
}