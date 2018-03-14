<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 04.03.2018
 * Time: 21:31
 */
include_once (ROOT.'/controllers/AdminBase.php');

class AdminController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        require_once (ROOT.'/views/admin/index.php');

        return true;
    }
}