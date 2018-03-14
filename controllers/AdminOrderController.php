<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 09.03.2018
 * Time: 22:47
 */
include (ROOT.'/controllers/AdminBase.php');

class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $orders = Order::getOrdersList();

        require_once (ROOT.'/views/admin_order/index.php');

        return true;
    }
    public function actionDelete($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);

        if(isset($_POST['submit'])) {

            Order::deleteOrder($id);

            header("Location: /admin/order");
        }

        require_once (ROOT.'/views/admin_order/delete.php');

        return true;
    }
    public function actionView($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'],true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProductsByIds($productsIds);

        require_once (ROOT.'/views/admin_order/view.php');

        return true;
    }
}