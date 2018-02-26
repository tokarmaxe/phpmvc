<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 17:06
 */
class News{
    /**
     * @param $id
     * @return bool|mixed
     */
    public static function getNewsItemById($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM site WHERE id='. $id);

            $newsItem = $result->fetch();

            return $newsItem;
        }
        return true;
    }
    public static function getNewsList(){
        $db=Db::getConnection();

        $newsList = array();

//        $qu = 'SELECT id, h1,date,short_content '
//            . 'FROM site '
//            . 'ORDER BY date DESC '
//            . 'LIMIT 10';
//        $result = $db->prepare($qu);
//        $result->execute();
//        $result = $db->query('SELECT id, title, data, short_content '. 'FROM site '. 'ORDER BY data DESC '. 'LIMIT 10');
        $result = $db->query('SELECT id, title, date, short_content FROM site ORDER BY date DESC LIMIT 10');
        $i=0;

        while($row = $result->fetch()){
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['date']=$row['date'];
            $newsList[$i]['short_content']=$row['short_content'];
            $i++;
        }
        return $newsList;
    }
}