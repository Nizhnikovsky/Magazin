<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 18.01.2018
 * Time: 16:22
 */
class User
{
    
    /**
     * Регистрация пользователя
     * @param type $first_name
     * @param type $last_name
     * @param type $email
     * @param type $password
     * @return type
     */
    public static function register($first_name,$last_name, $email, $password)
    {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO `user` ( last_name, first_name, email, password) '
            . 'VALUES ( :last_name, :first_name, :email, :password)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        
        return $result->execute();
        var_dump($result);
    }
    
    /**
     * Редактирование данных пользователя
     * @param int $id
     * @param int $phone
     * @param string $first_name
     * @param string $last_name
     * @param string $password
     */
    public static function edit($id, $first_name,$last_name, $phone, $password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE `user`
            SET first_name = :first_name, password = :password, last_name = :last_name, phone = :phone WHERE id = :id";
        echo $sql;
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }
    
    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : ingeger user id or false
     */
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();
        //$name = 'user';
        $sql = 'SELECT * FROM `user` WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
    
        $user = $result->fetch();
        if ($user) {
            
            return $user['id'];
        }
    
    }
    
    /**
     * @param $userId
     */
    public static function auth($userId)
    {
        
        $_SESSION['user'] = $userId;
    }
    
    public static function checkLogged()
    {
       
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        
        header("Location: /user/login");
    }
    
    public static function isGuest()
    {
     
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    
    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($first_name)
    {
        if (strlen($first_name) >= 2) {
            return true;
        }
        return false;
    }
    /**
     * Проверяет телефон: не меньше, чем 10 символов
     */
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 4) {
            return true;
        }
        return false;
    }
    
    /**
     * Проверяет email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function checkEmailExists($email)
    {
        
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM `user` WHERE email = :email';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn())
            return true;
        return false;
    }
    
    /**
     * Returns user by id
     * @param $id
     * @return mixed
     */
    public static function getUserById($id)
    {
        if ($id)
        {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM `user` WHERE id = :id';
            
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            
            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            
            
            return $result->fetch();
        }
    }
    
}

