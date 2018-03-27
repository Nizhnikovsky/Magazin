<div class="span3 col">
    <div class="block">
        <ul class="nav nav-list">
            <li class="nav-header"> Категории</li>
            <?php foreach ($categories as $categoryItem): ?>
                <li>
                    <a  href="/category/<?=$categoryItem['id']?>">
                        <?=$categoryItem['title']?></a>
                </li>
            <?php endforeach;?>
        
        
        </ul>
        <br/>
        <ul class="nav nav-list below">
            <li class="nav-header">Производители</li>
            <?php foreach ($brandList as $brand): ?>
                <li>
                    <a  href="/category/<?=$brand['id']?>">
                        <?=$brand['brand']?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="block">
        <h4 class="title">
            <span class="pull-left"><span class="text">Могут понравиться</span></span>
            <span class="pull-right">
                <a class="left button" id="prev" href="#myCarousel-2" data-slide="#prev"></a><a class="right button" id="next" href="#myCarousel-2" data-slide="#next"></a>
            </span>
        </h4>
        <div class="cycle-slideshow"
             data-cycle-fx=carousel
             data-cycle-timeout=6000
             data-cycle-carousel-visible=1
             data-cycle-carousel-fluid=true
             data-cycle-slides="div.item"
             data-cycle-prev="#prev"
             data-cycle-next="#next"
        >
            <?php foreach ($latestProduct as $product): ?>
                <div class="item">
                    <ul class="thumbnails listing-products">
                        <li class="span3">
                           
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <img alt="" src="/template/images/ladies/1.jpg"><br/>
                                <a href="../product/view.php" class="title">Fusce id molestie massa</a><br/>
                                <a href="#" class="category">Suspendisse aliquet</a>
                                <p class="price">$261</p>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="block">
        <h4 class="title"><strong>Топ</strong> Продаж</h4>
        <?php foreach ($topList as $list): ?>
        <ul class="small-product">
            <li>
                <a href="<?php echo Product::getImage($list['id'].'.1'); ?>" title="<?$list['title']?>">
                    <img src="<?php echo Product::getImage($list['id'].'.1'); ?>" alt="<?$list['title']?>">
                </a>
                <strong><a href="<?php echo Product::getImage($list['id'].'.1'); ?>"><?=$list['title'];?></a></strong>
            </li>
        </ul>
        <?php endforeach;?>
    </div>