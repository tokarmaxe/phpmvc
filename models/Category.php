<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 20.02.2018
 * Time: 22:32
 */

class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $categoryList = array();

        //$db = mysqli_connect('localhost','root','','super_mag');

        $result = $db->query('SELECT id, name FROM category ORDER BY sort_order ASC');

        $i=0;
        while($row = $result ->fetch())
        {
            $categoryList[$i]['id']=$row['id'];
            $categoryList[$i]['name']=$row['name'];
            $i++;
        }
        return $categoryList;
    }
    public static function getCategoriesListAdmin()
    {
        $db= Db::getConnection();

        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        $categoryList = array();
        $i=0;
        while($row=$result->fetch())
        {
            $categoryList[$i]['id']=$row['id'];
            $categoryList[$i]['name']=$row['name'];
            $categoryList[$i]['sort_order']=$row['sort_order'];
            $categoryList[$i]['status']=$row['status'];
            $i++;
        }
        return $categoryList;
    }
}