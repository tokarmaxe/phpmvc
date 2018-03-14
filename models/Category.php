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

        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }

    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }

    public static function createCategory($options)
    {
        $db = Db::getConnection();

        $sql = "INSERT INTO category (name, sort_order, status) VALUES (:name, :sort_order, :status)";
        //$sql = 'INSERT INTO `category` SET name=:name, sort_order=:sort_order, status=:status';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getCategoryById($id)
    {
        $db = Db::getConnection();

        $category = array();

        $result = $db->query('SELECT id, name, sort_order, status FROM category WHERE id=' . $id);

        $i = 0;
        while ($row = $result->fetch()) {
            $category['id'] = $row['id'];
            $category['name'] = $row['name'];
            $category['sort_order'] = $row['sort_order'];
            $category['status'] = $row['status'];
            $i++;
        }
        return $category;
    }
    public static function updateCategoryById($id, $options)
    {
        $db = Db::getConnection();

        $sql = "UPDATE category SET name=:name, sort_order=:sort_order, status =:status WHERE id={$id}";

        $result = $db->prepare($sql);
        $result->bindParam(':name',$options['name'],PDO::PARAM_STR);
        $result->bindParam(':sort_order',$options['sort_order'],PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'],PDO::PARAM_STR);
        return $result->execute();
    }
    public static function deleteCategoryById($id)
    {
        $db = Db::getConnection();

        $sql = "DELETE FROM category WHERE id=:id";

        $result=$db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_STR);
        return $result->execute();
    }
}