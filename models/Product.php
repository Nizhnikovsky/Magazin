<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 16.01.2018
 * Time: 21:15
 */

class Product
{
    // Количество отображаемых товаров по умолчанию
    const SHOW_BY_DEFAULT = 6;
    
    /**
     * Возвращает массив последних товаров
     * @param type $count [optional] <p>Количество</p>
     * @param type $page [optional] <p>Номер текущей страницы</p>
     * @return array <p>Массив с товарами</p>
     */
    public static function getLatestProducts($main_category_id,$page=1)
    {
        $page = intval($page);
        $limit = self::SHOW_BY_DEFAULT;
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    
        $db = Db::getConnection();
        $sql = 'SELECT * FROM `product` '
            . 'WHERE status = 1 '
            . 'AND main_category_id =:main_category_id '
            . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->bindParam(':main_category_id', $main_category_id, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();
    
        $products = array();
        $i=0;
        while($row = $result->fetch())
        {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_new'] = $row['is_new'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['sizes'] = $row['sizes'];
            $products[$i]['color'] = $row['color'];
            $i++;
        }
        return $products;
    }
    
    /**
     * Возвращает список товаров в указанной категории
     * @param type $categoryId <p>id категории</p>
     * @param type $page [optional] <p>Номер страницы</p>
     * @return type <p>Массив с товарами</p>
     */
    public static function getProductListByCategory($categoryId=false,$page=1)
    {
        if($categoryId)
        {
            $page = intval($page);
            $limit = Product::SHOW_BY_DEFAULT;
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            
            $db = Db::getConnection();
           
            $sql = 'SELECT id, title, price, is_new FROM `product` '
                . 'WHERE status = 1 AND category_id = :category_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';
            // Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
            $result->bindParam(':limit', $limit, PDO::PARAM_INT);
            $result->bindParam(':offset', $offset, PDO::PARAM_INT);
            // Выполнение коменды
            $result->execute();
            
            $products = array();
            $i=0;
            while($row = $result->fetch())
            {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $products;
        }
    }
    
    public static function getProductById($id)
    {
        $id = intval($id);
        
        if($id)
        {
            $db = Db::getConnection();
    
            $sql = 'SELECT * FROM `product` WHERE id = :id';
            // Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            // Выполнение коменды
            $result->execute();
            return $result->fetch();
            
            
        }
    }
    public static function getTopList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        
        $sql = 'SELECT id, title, price FROM product ORDER BY items_sold DESC LIMIT 3';
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }
    /**
     * Возвращает список товаров
     * @return array <p>Массив с товарами</p>
     */
    public static function getProductsList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM product ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['category_id'] = $row['category_id'];
            $productsList[$i]['sizes'] = $row['sizes'];
            $productsList[$i]['color'] = $row['color'];
            $i++;
        }
        return $productsList;
    }
    /**
     * Возвращает список производителей
     * @return array <p>Массив с брендами</p>
     */
    public static function getBrandList($main_category_id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $sql ='SELECT title FROM `brand` WHERE main_category_id =:main_category_id';
    
        $result = $db->prepare($sql);
        $result->bindParam(':main_category_id', $main_category_id, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['title'] = $row['title'];
            $i++;
        }
        return $productsList;
    }
    
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();
        
        $sql = 'SELECT count(id) AS count FROM `product` WHERE status="1" AND category_id = :category_id';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        // Выполнение команды
        $result->execute();
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
    }
    
    public static function getTotalProducts()
    {
        $db = Db::getConnection();
    
        $sql = 'SELECT count(id) AS count FROM `product` WHERE status="1"';
        $result = $db->prepare($sql);
        // Выполнение команды
        $result->execute();
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
    
        return $row['count'];
    }
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',',$idsArray);
        
        $sql = "SELECT * FROM `product` WHERE status='1' AND id IN ($idsString)";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch())
        {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }
    public static function getRecommendedProducts()
    {
        $db = Db::getConnection();
        
        // Получение и возврат результатов
        $result = $db->query('SELECT id, title, price, is_new FROM `product` '
            . 'WHERE status = "1" AND is_recommended = "1" '
            . 'ORDER BY id DESC');
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }
    public static function getNewProducts()
    {
        $db = Db::getConnection();
        
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM `product` '
            . 'WHERE status = "1" AND is_new = "1" '
            . 'ORDER BY id DESC');
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['on_sale'] = $row['on_sale'];
            $i++;
        }
        return $productsList;
    }
    /**
     * Удаляет товар с заданным id
     * @param integer $id <p>id товара</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteProductById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = 'DELETE FROM product WHERE id = :id';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    /**
     * Редактирует товар с заданным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Массив с информацей о товаре</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Текст запроса к БД
        $sql = "UPDATE product
            SET
                code = :code,
                title = :title,
                brand_id = :brand_id,
                price = :price,
                description = :description,
                category_id = :category_id,
                availability = :availability,
                is_new = :is_new,
                is_recommended = :is_recommended,
                on_sale = :on_sale,
                status = :status,
                sizes = :sizes,
                color = :color
            WHERE id = :id";
    
        print_r($sql);
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':on_sale', $options['on_sale'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sizes', $options['sizes'], PDO::PARAM_STR);
        $result->bindParam(':color', $options['color'], PDO::PARAM_STR);
        return $result->execute();
    }
    
    /**
     * Добавляет новый товар
     * @param array $options <p>Массив с информацией о товаре</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
       
        // Текст запроса к БД
        $sql = 'INSERT INTO product '
            . '(title, code, price, category_id, brand, availability,'
            . 'description, is_new, is_recommended, status, sizes, color)'
            . 'VALUES '
            . '(:title, :code, :price, :category_id, :brand, :availability,'
            . ':description, :is_new, :is_recommended, :status, :sizes, :color)';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sizes', $options['sizes'], PDO::PARAM_STR);
        $result->bindParam(':color', $options['color'], PDO::PARAM_STR);
       
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
    
    /**
     * Возвращает текстое пояснение наличия товара:<br/>
     * <i>0 - Под заказ, 1 - В наличии</i>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }
    
    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';
        
        // Путь к папке с товарами
        $path = '/upload/images/products/';
        
        // Путь к изображению товара
        $pathToProductImage = $path .  $id . '.jpg';
        
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
    public static function getColorByGender()
    {
        $db = Db::getConnection();
        // Получение и возврат результатов
        $sql ='SELECT DISTINCT  color FROM `product` ';
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['color'] = $row['color'];
            $i++;
        }
        return $productsList;
        
    }
}