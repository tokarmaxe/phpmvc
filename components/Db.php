<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 17:42
 */

class Db
{
    public static function getConnection()
    {
        $paramsPath= ROOT.'/config/db_params.php';
        $params = include_once ($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO ($dsn, $params['user'],$params['password']);

        return $db;
    }
}