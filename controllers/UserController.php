<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.02.2018
 * Time: 21:57
 */

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (User::checkName($name)) {
            } else {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (User::checkEmail($email)) {
            } else {
                $errors[] = 'Неправильный e-mail';
            }

            if (User::checkPassword($password)) {
            } else {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }
}