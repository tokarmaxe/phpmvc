<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 15:19
 */
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class ProductController
{
    public function actionView($id){

        $categories = array();
        $categories = Category::getCategoriesList();

        $product = array();
        $product = Product::getProductById($id);

        require_once (ROOT.'/views/product/view.php');

        return true;
    }

}