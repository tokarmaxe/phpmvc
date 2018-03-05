<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 04.03.2018
 * Time: 21:31
 */

class AdminController
{
    public function actionIndex()
    {
        require_once (ROOT.'/views/admin/index.php');

        return true;
    }
}