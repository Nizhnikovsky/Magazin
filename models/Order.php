<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 29.01.2018
 * Time: 23:22
 */


class Order
{
    /**
     * Сохранение заказа
     * @param string $userName
     * @param integer $userId
     * @param string $userPhone
     * @param string $userComment
     * @param string $userAdress
     * @param string $userDelivery
     * @param integer $userPostId
     * @param array $products
     * @return boolean
     */
   public static function save($userName, $userPhone, $userComment, $userDelivery, $userAdress, $userPostId, $userId, $products)
   {
       $products = json_encode($products);
       
       $db = Db::getConnection();
       
       $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, delivery, adress, post_id, user_id, products) '
           . 'VALUES (:user_name, :user_phone, :user_comment, :delivery, :adress, :post_id, :user_id, :products)';
    
       $result = $db->prepare($sql);
       $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
       $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
       $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
       $result->bindParam(':delivery', $userDelivery, PDO::PARAM_STR);
       $result->bindParam(':adress', $userAdress, PDO::PARAM_STR);
       $result->bindParam(':post_id', $userPostId, PDO::PARAM_STR);
       $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
       $result->bindParam(':products', $products, PDO::PARAM_STR);
    
       return $result->execute();
   }
    public static function getOrdersList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Получение и возврат результатов
        $result = $db->query('SELECT id, user_name, user_phone, date, status FROM product_order ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['date'] = $row['date'];
            $ordersList[$i]['status'] = $row['status'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }
    
    /**
     * Возвращает заказ с указанным id
     * @param integer $id <p>id</p>
     * @return array <p> Массив с информацией о заказе</p>
     */
    public static function getOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM `product_order` WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_INT);
        
        //Указываем что хоти получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        //Выполнение запроса
        $result->execute();
        
        return $result->fetch();
    }
    
    /**
     * Возвращает текстое пояснение статуса для заказа :<br/>
     * <i>1 - Новый заказ, 2 - В обработке, 3 - Доставляется, 4 - Закрыт</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
        public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }
    /**
     * Удаляет заказ с заданным id
     * @param integer $id <p>id заказа</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = 'DELETE FROM `product_order` WHERE id = :id';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    /**
     * Редактирует заказ с заданным id
     * @param integer $id <p>id товара</p>
     * @param string $userName <p>Имя клиента</p>
     * @param string $userPhone <p>Телефон клиента</p>
     * @param string $userComment <p>Комментарий клиента</p>
     * @param string $date <p>Дата оформления</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateOrderById($id, $userName, $userPhone, $userComment,$delivery,$adress,$post_id, $date, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = "UPDATE product_order
            SET
                user_name = :user_name,
                user_phone = :user_phone,
                user_comment = :user_comment,
                delivery = :delivery,
                adress = :adress,
                post_id = :post_id,
                date = :date,
                status = :status
            WHERE id = :id";
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':delivery', $date, PDO::PARAM_STR);
        $result->bindParam(':adress', $date, PDO::PARAM_STR);
        $result->bindParam(':post_id', $date, PDO::PARAM_INT);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
}