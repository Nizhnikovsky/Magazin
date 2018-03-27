<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 12.01.2018
 * Time: 15:40
 */

return array(
    // Товар:
    'product/([0-9]+)'=>'product/view/$1',//actionView в ProductController
    
    // Каталог:
    'catalog/page-([0-9]+)'=>'catalog/index/$1',//actionIndex в CatalogController
    //'catalog'=>'catalog/index',//actionIndex в CatalogController
    'woman'=>'catalog/index/2',//actionIndex в CatalogController 1- woman
    'man'=>'catalog/index/1',//actionIndex в CatalogController 2- man
    'baby'=>'catalog/index/3',//actionIndex в CatalogController 3- baby
   
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)'=>'catalog/category/$1/$2',// actionCategory в CatalogController
    'category/([0-9]+)'=>'catalog/category/$1',//actionCategory в CatalogController
    // Корзина:
    'cart/checkout'=>'cart/checkout',// actionAdd в CartController
    'cart/delete/([0-9]+)'=>'cart/delete/$1', //actionDelete в CartController
    'cart/add/([0-9]+)'=>'cart/add/$1', // actionAdd в CartController
    'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1', // actionAddAjax в CartController
    'cart'=>'cart/index', //actionIndex в CartController
    
    // Пользователь:
    'user/register'=>'user/register',
    'user/login'=>'user/login',
    'user/logout'=>'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet'=>'cabinet/index',//actionIndex в CabinetController
    'wishlist'=>'user/wishlist',
    
    //Управление товарами
    'admin/product/create'=>'adminProduct/create',
    'admin/product/update/([0-9]+)'=>'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)'=>'adminProduct/delete/$1',
    'admin/product'=>'adminProduct/index',
    
    //Управление категориями
    'admin/category/create'=>'adminCategory/create',
    'admin/category/update/([0-9]+)'=>'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)'=>'adminCategory/delete/$1',
    'admin/category'=>'adminCategory/index',
    
    //Управление заказами
    'admin/order/update/([0-9]+)'=>'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)'=>'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)'=>'adminOrder/view/$1',
    'admin/order'=>'adminOrder/index',
    
    //Админпанель
    'admin'=>'admin/index',
   
   //О магазине
    'contacts'=>'site/contacts',
    'about'=>'site/about',
    //Блог
    'blog/([0-9]+)'=>'blog/news/$1',
    'blog'=>'blog/index',
    
   //Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
   ''=>'site/index',// actionIndex в SiteController
);
