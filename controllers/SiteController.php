<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 12.01.2018
 * Time: 14:58
 */

class SiteController
{
    public function actionIndex()
    {
        //$categories = array();
        //$categories = Category::getCategoriesList($gender);
    
        $latestProduct = array();
       // $latestProduct = Product::getLatestProducts();
    
        $main_categories = array();
        //$main_categories = Category::getMainCategory();
    
        //Список товаров для слайдера рекомендуемых товаров
        $sliderProducts = Product::getRecommendedProducts();
        
        //Список товаров для слайдера новых товаров
        $newProducts = Product::getNewProducts();
        
       require_once(ROOT . '/views/site/index.php');
        return true;
    }
    public function actionContacts()
    {
        $userName = '';
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if(isset($_POST['submit'])) {
    
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            $userName = $_POST['userName'];
            
            $errors = false;
    
            //Валидация полей
            if (User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
    
            if ($errors == false) {
                $adminEmail = 'Nizhnikovsky89@mail.ru';
                $message = " Текст : {$userText}. От {$userName}.{$userEmail}";
                $subject = "Тема письма ";
                $result = mail($adminEmail, $subject, $message);
                $result = true;
        
            }
        }
        
        require_once(ROOT . '/views/site/contacts.php');
        return true;
    }
    public function actionAbout()
    {
        require_once (ROOT . '/views/site/about.php');
        return true;
    }
}



