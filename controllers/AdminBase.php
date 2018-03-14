<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 09.03.2018
 * Time: 22:47
 */

abstract class AdminBase
{
    public static function checkAdmin()
    {
        $userId = User::checkLogged();

        $user = User::getUserByID($userId);

        if ($user['role'] == 'admin') {
            return true;
        }

        die('Access denied');
    }
}