<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 27.02.2018
 * Time: 20:13
 */

class ContactsController
{
    public function actionIndex()
    {
        require_once (ROOT.'/views/contacts/index.php');

        return true;
    }
}