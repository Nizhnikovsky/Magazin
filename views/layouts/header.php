<?php require_once(ROOT . '/components/HeaderCategories.php');?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Интернет магазин одежды</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/template/img/favicon.ico">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/template/css/animate.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="/template/css/pe-icon-7-stroke.min.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="/template/css/jquery-ui.min.css">
    <!-- Image Zoom CSS
    ============================================ -->
    <link rel="stylesheet" href="/template/css/img-zoom/jquery.simpleLens.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/template/css/meanmenu.min.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="/template/lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/template/lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/template/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/template/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/template/css/responsive.css">
    <!-- modernizr css -->
    <script src="/template/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header section start -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4">
                    <div class="left-header clearfix">
                        <ul>
                            <li><p><i class="fa fa-phone" aria-hidden="true"></i>(+380) 95 656 4436</p></li>
                            <li class="hd-none"><p><i class="fa fa-clock-o" aria-hidden="true"></i>Пон-Пят : 9:00-19:00</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-10">
                    <div class="right-header">
                        <ul>
                            <li><a href="/cart/"><i class="fa fa-shopping-cart"></i>Корзина</a></li>
                            <li><a href="/wishlist/"><i class="fa fa-heart"></i>Избранное</a></li>
                            <?php if(User::isGuest()):?>
                            <li><a href="/user/login"><i class="fa fa-lock"></i>Вход</a></li>
                            <?php else:?>
                            <li><a href="/cabinet/"><i class="fa fa-user"></i>Мой кабинет</a></li>
                            <li><a href="/user/logout"><i class="fa fa-unlock"></i>Выход</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-one" id="sticky-menu">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-xs-4">
                    <div class="logo">
                        <a href="/"><img src="/template/img/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-10 col-md-10 col-xs-6 static">
                    <div class="all-manu-area">
                        <div class="mainmenu clearfix hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                    <li><a href="/man/">Для мужчин</a>
                                        <div class="magamenu ">
                                            <ul class="again">
                                                <li class="single-menu colmd4">
                                                    <span>Одежда</span>
                                                    <?php foreach ($manWear as $wear):?>
                                                        <a href="#"><?=$wear['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Обувь</span>
                                                    <?php foreach ($manShoes as $shoes):?>
                                                        <a href="#"><?=$shoes['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Аксессуары</span>
                                                    <?php foreach ($manAcsessories as $acsessory):?>
                                                        <a href="#"><?=$acsessory['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="/woman/">Для женщин</a>
                                        <div class="magamenu ">
                                            <ul class="again">
                                                <li class="single-menu colmd4">
                                                    <span>Одежда</span>
                                                    <?php foreach ($womanWear as $wear):?>
                                                        <a href="#"><?=$wear['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Обувь</span>
                                                    <?php foreach ($womanShoes as $shoes):?>
                                                        <a href="#"><?=$shoes['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Аксессуары</span>
                                                    <?php foreach ($womanAcsessories as $acsessory):?>
                                                        <a href="#"><?=$acsessory['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="/baby/">Для детей</a>
                                        <div class="magamenu ">
                                            <ul class="again">
                                                <li class="single-menu colmd4">
                                                    <span>Одежда</span>
                                                    <?php foreach ($babyWear as $wear):?>
                                                        <a href="#"><?=$wear['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Обувь</span>
                                                    <?php foreach ($babyShoes as $shoes):?>
                                                        <a href="#"><?=$shoes['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                                <li class="single-menu colmd4">
                                                    <span>Аксессуары</span>
                                                    <?php foreach ($babyAcsessories as $acsessory):?>
                                                        <a href="#"><?=$acsessory['title']?></a>
                                                    <?php endforeach;?>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="/blog/">Блог</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <!--<div class="mobile-menu-area hidden-lg hidden-md">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <?php foreach ($mainCategoriesList as $mainCategory):?>
                                            <li><a href="/<?=$mainCategory['url']?>/"><?=$mainCategory['title']?></a>
                                                <div class="magamenu ">
                                                    <ul class="again">
                                                        <?php foreach ($ManCategoriesList as $man_category):?>
                                                            <li class="single-menu colmd4">
                                                                <span><?=$man_category['title']?></span>
                                                                <?php foreach ($manCategories as $category):?>
                                                                    <a href="#"><?=$category['title']?></a>
                                                                <?php endforeach;?>
                                                            </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                    <ul class="again">
                                                        <?php print_r($WomanCategoriesList)?>
                                                        <?php foreach ($WomanCategoriesList as $woman_category):?>
                                                            <li class="single-menu colmd4">
                                                                <span><?=$woman_category['title']?></span>
                                                                <?php foreach ($womanCategories as $category):?>
                                                                    <a href="#"><?=$category['title']?></a>
                                                                <?php endforeach;?>
                                                            </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                    <ul class="again">
                                                        <?php foreach ($BabyCategoriesList as $baby_category):?>
                                                            <li class="single-menu colmd4">
                                                                <span><?=$baby_category['title']?></span>
                                                                <?php foreach ($babyCategoriesWear as $category):?>
                                                                    <a href="#"><?=$category['title']?></a>
                                                                <?php endforeach;?>
                                                            </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?php endforeach;?>
                                        <li><a href="/blog/">Блог</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>-->
                        <!-- mobile menu end -->
                        <div class="right-header re-right-header">
                            <ul>
                                <li class="re-icon tnm"><i class="fa fa-search" aria-hidden="true"></i>
                                    <form method="get" id="searchform" action="#">
                                        <input type="text" value="" name="s" id="ws" placeholder="Поиск..." />
                                        <button type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </li>
                                <li><a href="/cart/"><i class="fa fa-shopping-cart"></i><span class="color1"><?=Cart::countItems();?></span></a>
                                    <ul class="drop-cart">
                                        <li>
                                            <a href="/cart/"><img src="/template/img/cart/1.png" alt="" /></a>
                                            <div class="add-cart-text">
                                                <p><a href="#">White Shirt</a></p>
                                                <p>$50.00</p>
                                                <span>Color : Blue</span>
                                                <span>Size   : SL</span>
                                            </div>
                                            <div class="pro-close">
                                                <i class="pe-7s-close"></i>
                                            </div>
                                        </li>
                                        <li class="total-amount clearfix">
                                            <span class="floatleft">Общая сумма</span>
                                            <span class="floatright"><strong>= $150.00</strong></span>
                                        </li>
                                        <li>
                                            <div class="goto text-center">
                                                <a href="/cart/"><strong>Корзина &nbsp;<i class="pe-7s-angle-right"></i></strong></a>
                                            </div>
                                        </li>
                                        <li class="checkout-btn text-center">
                                            <a href="/cart/checkout">Оформить заказ</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
