<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 16.01.2018
 * Time: 01:43
 */

class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
    
        $brandList = array();
        $brandList = Product::getBrandList();
    
        $latestProduct = Product::getProductsList();
        
        $topList = Product::getTopList();
        
        $product = Product::getProductById($productId);
        require_once(ROOT.'/views/product/view.php');
        return true;
    }
    
    
    
}