<?php include(ROOT . '/views/layouts/header.php');?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title"><?=Category::getTitle($_SERVER['REQUEST_URI'])?></h2>
                    <p><a href="/">На главную</a> | <?=Category::getTitle($_SERVER['REQUEST_URI'])?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- shop-style content section start -->
<section class="pages products-page section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-12">
                <div class="all-shop-sidebar">
                    <div class="top-shop-sidebar">
                        <h3 class="wg-title">Сортировать по</h3>
                    </div>
                    <div class="shop-one">
                        <h3 class="wg-title2">Категориям</h3>
                        <ul class="product-categories">
                        <?php foreach ( $categories as $category): ?>
                            <li class="cat-item current-cat">
                                <a  href="/category/<?=$category['id']?>"><?=$category['title']?></a>
                                <span class="count">(<?=Product::getTotalProductsInCategory($category['id'])?>)</span>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="shop-one">
                        <h3 class="wg-title2">Бренды</h3>
                        <ul class="product-categories">
                          <?php foreach ($brandList as $brand): ?>
                            <li class="cat-item">
                                <a href="#"><?=$brand['title']?></a>
                                <span class="count">(1)</span>
                            </li>
                          <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="shop-one re-shop-one">
                        <h3 class="wg-title2">Выбрать цену</h3>
                        <div class="widget shop-filter">
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div id="amount">
                                        <input type="text" name="first_price" class="first_price" />
                                        <input type="text" name="last_price" class="last_price"/>
                                        <button class="button-shop" type="submit"><i class="fa fa-search search-icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-one re-shop-one">
                        <h3 class="wg-title2">Выбрать цвет</h3>
                        <ul class="product-categories">
                            <?php foreach ($colorProduct as $color):?>
                            <li class="cat-item cat-item-11">
                                <a href="#"><?=$color['color']?></a>
                                <span class="count">(1)</span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="top-shop-sidebar sim">
                        <h3 class="wg-title">Найти </h3>
                        <ul class="products-list">
                            <li class="cat-item cat-item-11">Нет товаров для сравнения</li>
                        </ul>
                        <a class="clear-all" href="#">Очистить</a>
                        <a class="blog8" href="#">Найти</a>
                    </div>
                    <div class="top-shop-sidebar sim2">
                        <h3 class="wg-title">Community Pool</h3>
                    </div>
                    <div class="shop-one">
                        <ul class="product-categories">
                            <li class="cat-item cat-item-11">
                                <a href="#">Black</a>
                                <span class="count">(1)</span>
                            </li>
                            <li class="cat-item cat-item-8">
                                <a href="#">Orange</a>
                                <span class="count">(1)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="top-shop-sidebar an-shop">
                        <h3 class="wg-title">Топ продаж</h3>
                        <ul>
                          <?php foreach ($topList as $list): ?>
                            <li class="b-none">
                                <div class="tb-recent-thumbb">
                                    <a href="">
                                        <img class="attachment" src="/template/img/products/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="tb-recentb">
                                    <div class="tb-beg">
                                        <a href="#"><?=$list['title']?></a>
                                    </div>
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$<?=$list['price']?></span>
                                    </div>
                                </div>
                            </li>
                          <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="ro-info-box-wrap tpl3 st">
                        <div class="tb-image">
                            <img src="/template/img/products/34.jpg" alt="">
                        </div>
                        <div class="tb-content">
                            <div class="tb-content-inner an-inner">
                                <h5>Мужская коллекция</h5>
                                <h3>Сезонная распродажа</h3>
                                <h6>
                                    <a href="#">Купить сейчас</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="features-tab">
                            <!-- Nav tabs -->
                            <div class="shop-all-tab">
                                <div class="two-part">
                                    <ul class="nav tabs" role="tablist">
                                        <li class="vali">Показывать как:</li>
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i></a></li>
                                    </ul>
                                </div>
                                <div class="re-shop">
                                    <form action="/<?=Category::getTitle($_SERVER['REQUEST_URI'])?>/" method="post">
                                        <div class="sort-by">
                                            <div class="shop6">
                                                <label>Сортировать :</label>
                                                <select>
                                                    <option value="">По умолчанию</option>
                                                    <option value="">По популярности</option>
                                                    <option value="">По рейтингу</option>
                                                    <option value="">По новизне</option>
                                                    <option value="">По цене: от большей к меньшей</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="shop5">
                                            <label>Показывать по :</label>
                                            <select name="default">
                                                <option value="default">9</option>
                                                <option value="default">12</option>
                                                <option value="default">24</option>
                                                <option value="default">36</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="shop-tab">
                                        <?php foreach ($latestProduct as $product): ?>
                                            <!-- single-product start -->
                                            <div class="col-md-4 col-lg-4 col-sm-6">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <div class="pro-type">
                                                            <span>new</span>
                                                        </div>
                                                        <a href="#">
                                                            <img src="/template/img/products/1.jpg" alt="<?=$product['title']?>" />
                                                            <img class="secondary-image" alt="<?=$product['title']?>" src="/template/img/products/2.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="product-dsc">
                                                        <h3><a href="#"><?=$product['title']?></a></h3>
                                                        <div class="star-price">
                                                            <span class="price-left"><?=$product['price']?> грн.</span>
                                                            <span class="star-right">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-btn">
                                                        <a href="#" data-placement="top" data-target="#quick-view" data-trigger="hover" data-toggle="modal" data-original-title="Quick View"><i class="fa fa-eye"></i></a>
                                                        <a data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add To Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product end -->
                                        <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <?php foreach ($latestProduct as $product): ?>
                                        <div class="li-item">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="tb-product-item-inner tb2 pct-last">
                                                    <div class="pro-type">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="re-img">
                                                        <a href="#"><img alt="" src="/template/img/products/1.jpg"></a>
                                                    </div>
                                                    <div class="actions-btn">
                                                        <a data-original-title="Quick View" data-toggle="modal" data-trigger="hover" data-target="#quick-view" data-placement="top" href="#">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="f-fix">
                                                    <div class="tb-beg">
                                                        <a href="#"><?=$product['title']?></a>
                                                    </div>
                                                    <div class="tb-product-wrap-price-rating">
                                                        <div class="tb-product-price font-noraure-3">
                                                            <span class="amount2 ana"><?=$product['price']?> грн.</span>
                                                        </div>
                                                    </div>
                                                    <p class="desc"><?=$product['description']?></p>
                                                    <div class="last-cart l-mrgn ns">
                                                        <a class="las4" href="#">Add To Cart</a>
                                                    </div>
                                                    <div class="tb-product-btn">
                                                        <a href="#">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-retweet"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-all-tab-cr shop-bottom">
                                <div class="two-part">
                                    <div class="shop5 page">
                                        <ul>
                                            <li>
                                                <a class="active" href="#">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#"><i class="fa fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-style  content section end -->
<!-- quick view start -->
<div class="quick-view modal fade in" id="quick-view">
    <div class="container">
        <div class="row">
            <?php foreach ($latestProduct as $product): ?>
            <div id="view-gallery" class="owl-carousel product-slider owl-theme">
                <div class="col-xs-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-dismiss="modal">
                                        <span>x</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5">
                                            <div class="quick-image">
                                                <div class="single-quick-image tab-content text-center">
                                                    <div class="tab-pane  fade in active" id="sin-pro-1">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-2">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-3">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                    <div class="tab-pane fade in" id="sin-pro-4">
                                                        <img src="img/quick-view/10.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <div class="nav nav-tabs">
                                                        <ul>
                                                            <li><a data-toggle="tab" href="#sin-pro-1"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-2"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-3"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            <li><a data-toggle="tab" href="#sin-pro-4"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="quick-right">
                                                <div class="quick-right-text">
                                                    <h3><strong><?=$product['title']?></strong></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <a href="#">06 Review</a>
                                                        <a href="#">Add review</a>
                                                    </div>
                                                    <div class="amount">
                                                        <h4><?=$product['price']?> грн</h4>
                                                    </div>
                                                    <p><?=$product['description']?></p>
                                                    <div class="row m-p-b">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse responsive-strok clearfix">
                                                                <ul>
                                                                    <li><span>Доступность</span><strong>:</strong> In stock</li>
                                                                    <li><span>Состояние</span><strong>:</strong> New product</li>
                                                                    <li><span>Категория</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="por-dse color">
                                                                <ul>
                                                                    <li><span>цвет</span><strong>:</strong> <a href="#"><?=$product['color']?></a> <a href="#"><?=$product['color']?></a><a href="#"><?=$product['color']?></a></li>
                                                                    <li><span>размер</span><strong>:</strong> <a href="#"><?=$product['sizes']?></a> <a href="#"><?=$product['sizes']?></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dse-btn">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse clearfix">
                                                                    <ul>
                                                                        <li class="share-btn qty clearfix"><span>количество</span>
                                                                            <form action="#" method="POST">
                                                                                <div class="plus-minus">
                                                                                    <a class="dec qtybutton">-</a>
                                                                                    <input type="text" value="01" name="qtybutton" class="plus-minus-box">
                                                                                    <a class="inc qtybutton">+</a>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                        <li class="share-btn clearfix"><span>share</span>
                                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse clearfix responsive-othre">
                                                                    <ul class="other-btn">
                                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="por-dse add-to">
                                                                    <a href="#">add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <!-- single-product item end -->
            </div>
        </div>
    </div>
</div>
<!-- quick view end -->
<?php include(ROOT . '/views/layouts/footer.php');?>