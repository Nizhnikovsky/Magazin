<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 26.01.2018
 * Time: 22:03
 */

class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);
        
        //Пустой массив для товаров к корзине
        $productsInCart = array();
        
        //Если в корзине есть товары (они храняться в сессии)
        if(isset($_SESSION['products']))
        {
            //То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }
        
        //Если товар есть в корзине, но был добавлен еще раз  увеличим количество
        if(array_key_exists($id,$productsInCart))
        {
            $productsInCart[$id]++;
        }
        else {
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['products'] = $productsInCart;
        return self::countItems();
    }
    
    /**
     * Подсчет количества товаров в корзине (в сессии)
     * @return int
     */
     public static function countItems()
     {
         if(isset($_SESSION['products']))
         {
             $count = 0;
             foreach ($_SESSION['products'] as $id => $quantity)
             {
                 $count = $count + $quantity;
             }
             return $count;
         }
         else
         {
             return 0;
         }
     }
    public static function getProducts()
    {
        if(isset($_SESSION['products']))
        {
            return $_SESSION['products'];
        }
        return false;
    }
    
    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        
        if($productsInCart)
        {
            $total = 0;
            foreach ($products as $item)
            {
                $total+= $item['price'] * $productsInCart[$item['id']];
            }
            return $total;
        }
    }
    
    public static function clear()
    {
        if(isset($_SESSION['products']))
        {
            unset($_SESSION['products']);
        }
    }
    public static function deleteProduct($id)
    {
        //Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();
        
        //Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);
        
        //Записываем в сессию массив товаров с удаленным элементов в сессию
        $_SESSION['products'] = $productsInCart;
    }
    
}