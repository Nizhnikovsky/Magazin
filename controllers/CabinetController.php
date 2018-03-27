<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 22.01.2018
 * Time: 17:20
 */

class CabinetController
{
    
    public function actionIndex()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
       
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
       
        require_once(ROOT . '/views/cabinet/index.php');
        
        return true;
    }
    
    public function actionEdit()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        
        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $phone = $user['phone'];
        $password = $user['password'];
        
        $result = false;
        
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone = $user['phone'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($first_name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPhone($phone)) {
                $errors[] = 'Номер телефона не должен быть короче 10-ти символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User::edit($userId, $first_name,$last_name, $phone, $password);
            }
            
        }
        
        require_once(ROOT . '/views/cabinet/edit.php');
        
        return true;
    }

}