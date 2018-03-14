<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 01.03.2018
 * Time: 23:06
 */

class Order
{
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        $products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam('user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getOrdersList()
    {
        $db = Db::getConnection();

        $orders = array();

        $result = $db->query('SELECT id, user_name, user_phone, date, products, status FROM product_order');

        $i = 0;
        while ($row = $result->fetch()) {
            $orders[$i]['id'] = $row['id'];
            $orders[$i]['user_name'] = $row['user_name'];
            $orders[$i]['user_phone'] = $row['user_phone'];
            $orders[$i]['date'] = $row['date'];
            $orders[$i]['products'] = $row['products'];
            $orders[$i]['status'] = $row['status'];
            $i++;
        }
        return $orders;
    }

    public static function deleteOrder($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM product_order WHERE id=:id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getOrderById($id)
    {
        $db = Db::getConnection();

        //$order = array();

        $result = $db->query('SELECT * FROM product_order WHERE id='.$id);

        $i = 0;
        while ($row = $result->fetch()) {
            $order['id'] = $row['id'];
            $order['user_name'] = $row['user_name'];
            $order['user_comment']=$row['user_comment'];
            $order['user_phone'] = $row['user_phone'];
            $order['date'] = $row['date'];
            $order['products'] = $row['products'];
            $order['status'] = $row['status'];
            $i++;
        }
        return $order;
    }
}