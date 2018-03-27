<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 05.02.2018
 * Time: 16:01
 */

class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    
    public function actionIndex()
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Подключаем вид
        require_once (ROOT . '/views/admin/index.php');
        return true;
    }
}