<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 18.01.2018
 * Time: 16:20
 */

class UserController
{
    
    public function actionRegister()
    {
        $first_name = '';
        $last_name = '';
        $email = '';
        $password = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            
            if (!User::checkName($first_name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            
            if ($errors == false) {
                $result = User::register($first_name,$last_name, $email, $password);
            }
        }
      
        require_once(ROOT . '/views/user/register.php');
        
        return true;
    }
    
    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }
            
        }
        require_once(ROOT . '/views/user/login.php');
        return true;
    }
    
    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }
    public function actionWishlist()
    {
    
        require_once(ROOT . '/views/user/wishlist.php');
        return true;
    }
}