<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 26.01.2018
 * Time: 21:55
 */

class CartController
{
    public function actionAdd($id)
    {
        //Добавление товара в корзину
        Cart::addProduct($id);
        
        //Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }
    public function actionAddAjax($id)
    {
        //Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }
    public function actionIndex()
    {
        $categories = array();
        //$categories = Category::getCategoriesList();
    
        $brandList = array();
       // $brandList = Product::getBrandList();
        
        $productsInCart = Cart::getProducts();
        
        if($productsInCart)
        {
            $productIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productIds);
            
            //Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once (ROOT.'/views/cart/index.php');
        return true;
    }
    
   public function actionCheckout()
   {
       // Список категорий для левого меню
       $categories = array();
       $categories = Category::getCategoriesList();
    
       $brandList = array();
       $brandList = Product::getBrandList();
    
       //Статус успешного оформления заказа
       $result = false;
    
       //Форма отправления
       if (isset($_POST['submit'])) {
           //Форма отправления заполнена
        
           //Считываются данные из формы
           $userName = $_POST['userName'];
           $userPhone = $_POST['userPhone'];
           $userComment = $_POST['userComment'];
           $userDelivery = $_POST['userDelivery'];
           $userAdress = $_POST['userAdress'];
           $userPostId = $_POST['userPostId'];
           
           //Валидация полей
           $errors = false;
           if (!User::checkName($userName))
               $errors[] = 'Неправильное имя';
           if (!User::checkPhone($userPhone))
               $errors[] = 'Неправильный телефон';
        
           //Форма заполнена корректно
           if ($errors == false) {
               //Форма заполнена корректно.
               //Сохраняем заказ в базе данных
            
               //Собираем информацию о заказе
               $productsInCart = Cart::getProducts();
              
               if (User::isGuest())
               {
                   $userId = NULL;
               } else {
                   $userId = User::checkLogged();
               }
            
               //Сохраняем заказ в БД
            
               $result = Order::save($userName, $userPhone, $userComment,$userDelivery,$userAdress,$userPostId, $userId, $productsInCart);
               print_r($result);
               if ($result) {
                   //Оповещаем администратора о новом заказе
                   $adminEmail = 'Nizhnikovsky89@mail.ru';
                   $message = '';
                   $subject = 'Новый заказ';
                   //mail($adminEmail, $subject, $message);
                
                   Cart::clear();
               }
           } else {
               //Форма заполнена не корректно
               // Итоги: общая стоимость, количество товаров
               $productsInCart = Cart::getProducts();
               $productsIds = array_keys($productsInCart);
               $products = Product::getProductsByIds($productsIds);
               $totalPrice = Cart::getTotalPrice($products);
               $totalQuantity = Cart::countItems();
           }
       } else {
           // Форма не отправлена
           // Получием данные из корзины
           $productsInCart = Cart::getProducts();
        
           // В корзине есть товары?
           if ($productsInCart == false) {
               // В корзине есть товары? - Нет
               // Отправляем пользователя на главную искать товары
               header("Location: /");
           } else {
               // В корзине есть товары? - Да
               // Итоги: общая стоимость, количество товаров
               $productsIds = array_keys($productsInCart);
               $products = Product::getProductsByIds($productsIds);
               $totalPrice = Cart::getTotalPrice($products);
               $totalQuantity = Cart::countItems();
            
               $userName = false;
               $userPhone = false;
               $userComment = false;
               $userDelivery = false;
               $userAdress = false;
               $userPostId = false;
            
               // Пользователь авторизирован?
               if (User::isGuest()) {
                   // Нет
                   // Значения для формы пустые
               } else {
                   // Да, авторизирован
                   // Получаем информацию о пользователе из БД по id
                   $userId = User::checkLogged();
                   $user = User::getUserById($userId);
                   // Подставляем в форму
                   $userName = $user['first_name'];
                   $userPhone = $user['phone'];
               }
           }
       }
     
       require_once (ROOT.'/views/cart/checkout.php');
       return true;
   }
   public function actionDelete($id)
   {
      //Удаление товара из корзины и возващение пользователя на страницу
       
       Cart::deleteProduct($id);
       header("Location: /cart");
   }
}