<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 20.02.2018
 * Time: 19:07
 */
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();

        require_once (ROOT.'/views/site/index.php');

        return true;
    }
}