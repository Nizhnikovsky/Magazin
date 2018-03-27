<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 06.02.2018
 * Time: 21:56
 */

class AdminOrderController extends AdminBase
{
    /**
     * Action для страницы "Управление заказами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Получаем список заказов
        $ordersList = Order::getOrdersList();
        
        // Подключаем вид
        require_once(ROOT . '/views/admin_order/index.php');
        return true;
    }
    public function actionView($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        //Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);
        
        //Получаем массив с идентефикаторами и количеством товаров
        $productsQuantity = json_decode($order['products'],true);
       
        //Получаем массив с идентификаторами товаров
        $productsIds = array_keys($productsQuantity);
        
        //Получаем список товаров в заказе
        $products = Product::getProductsByIds($productsIds);
        
        //Подключаем вид
        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }
    /**
     * Action для страницы "Редактирование заказа"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $delivery = $_POST['delivery'];
            $adress = $_POST['adress'];
            $post_id =$_POST['post_id'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            
            // Сохраняем изменения
            Order::updateOrderById($id, $userName, $userPhone, $userComment,$delivery,$adress,$post_id, $date, $status);
            
            // Перенаправляем пользователя на страницу управлениями заказами
            header("Location: /admin/order/view/$id");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }
    /**
     * Action для страницы "Удалить заказ"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем заказ
            Order::deleteOrderById($id);
            
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/order");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }
    
}