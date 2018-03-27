<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 17.01.2018
 * Time: 14:33
 */

class CatalogController
{
    public function actionIndex($main_category_id,$page=1)
    {
      
        $categories = Category::getProductTypeList($main_category_id);
        
        $latestProduct = Product::getLatestProducts($main_category_id,$page);
        
        $brandList = Product::getBrandList($main_category_id);
        
        $topList = Product::getTopList();
        
        $colorProduct = Product::getColorByGender();
        $total = Product::getTotalProducts();
        //Создание обьекта Pagination , постраничная навигация
        
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }
     public function actionCategory($categoryId,$page=1)
     {
         $categories = array();
         $categories = Category::getCategoriesList();
         
         $categoryProducts = array();
         $categoryProducts = Product::getProductListByCategory($categoryId,$page);
         
         
         
         $brandList = array();
         $brandList = Product::getBrandList();
         
         $total = Product::getTotalProductsInCategory($categoryId);
        
         //Создание обьекта Pagination , постраничная навигация
    
         $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
         
         
         require_once (ROOT. '/views/catalog/category.php');
         return true;
     }
}