<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 16.01.2018
 * Time: 16:21
 */
class Category
{
    
    public static function getCategoriesList($main_category_id,$category_id)
    {
        $db=Db::getConnection();
        
        $sql ="SELECT id, title FROM `product_type` WHERE main_category_id =:main_category_id AND category_id =:category_id";
       
        $result = $db->prepare($sql);
        $result->bindParam(':main_category_id', $main_category_id, PDO::PARAM_INT);
        $result->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();
        
        $CategoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $CategoryList[$i]['id'] = $row['id'];
            $CategoryList[$i]['title'] = $row['title'];
            $i++;
        }
        return $CategoryList;
    }
    public static function getProductTypeList($main_category_id)
    {
        $db=Db::getConnection();
        
        $sql ="SELECT id, title FROM `product_type` WHERE main_category_id =:main_category_id ";
        
        $result = $db->prepare($sql);
        $result->bindParam(':main_category_id', $main_category_id, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();
        
        $CategoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $CategoryList[$i]['id'] = $row['id'];
            $CategoryList[$i]['title'] = $row['title'];
            $i++;
        }
        return $CategoryList;
    }
    /**
     * Возвращает массив категорий для списка в админпанели <br/>
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категорий</p>
     */
    public static function getCategoriesListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Запрос к БД
        $sql = ('SELECT id, title, sort_order, status FROM `category` ORDER BY sort_order ASC');
        
        // Получение и возврат результатов
        $result = $db->prepare($sql);
    
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['title'] = $row['title'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }
    
    /**
     * Удаляет категорию с заданным id
     * @param integer $id
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    /**
     * Редактирование категории с заданным id
     * @param integer $id <p>id категории</p>
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();
     
        // Текст запроса к БД
        $sql = "UPDATE `category`
            SET
                title = :title,
                sort_order = :sort_order,
                status = :status
            WHERE id = :id";
       
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
       
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
         return $result->execute();
    }
    
    /**
     * Возвращает категорию с указанным id
     * @param integer $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';
        
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Выполняем запрос
        $result->execute();
        
        // Возвращаем данные
        return $result->fetch();
    }
    
    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }
    
    /**
     * Добавляет новую категорию
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createCategory($name, $sortOrder, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = 'INSERT INTO category (title, sort_order, status) '
            . 'VALUES (:title, :sort_order, :status)';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
    public static function getTitle($uri)
    {
        $title = trim($uri,'/');
        switch ($title) {
            case 'woman':
                return 'Для женщин';
                break;
            case 'man':
                return 'Для мужчин';
                break;
            case 'baby':
                return 'Для ребенка';
                break;
        }
    }
    public static function getCategoriesListBaby($gender)
    {
        
        $db=Db::getConnection();
        
        $sql ="SELECT * FROM `category` WHERE baby_gender =:baby_gender ";
        
        $result = $db->prepare($sql);
        $result->bindParam(':baby_gender', $gender, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();
        
        $CategoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $CategoryList[$i]['id'] = $row['id'];
            $CategoryList[$i]['title'] = $row['title'];
            $i++;
        }
        return $CategoryList;
    }
    public static function getCategoriesListByGender($main_category_id)
    {
        
        $db=Db::getConnection();
        
        $sql ="SELECT title FROM `product_type` WHERE main_category_id =:main_category_id ";
        
        $result = $db->prepare($sql);
        $result->bindParam(':main_category_id', $main_category_id, PDO::PARAM_INT);
        // Выполнение команды
        $result->execute();
        
        $CategoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $CategoryList[$i]['title'] = $row['title'];
            $i++;
        }
        return $CategoryList;
    }
}
