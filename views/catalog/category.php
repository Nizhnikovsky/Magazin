<?php include(ROOT . '/views/layouts/header.php');?>
    <section class="header_text sub">
        <img class="pageBanner" src="/template/images/pageBanner.png" alt="New products" >
        <h4><span><?php
                    echo $categories[$categoryId-1]['title'] ;
                ?></span></h4>
    </section>
    <section class="main-content">
        
        <div class="row">
            <div class="span9">
                <ul class="thumbnails listing-products">
                    <?php foreach ($categoryProducts as $product): ?>
                        <li class="span3">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a href="/product/<?=$product['id']?>"><img alt="" src="<?php echo Product::getImage($product['id']); ?>"></a><br/>
                                <a href="/product/<?=$product['id']?>" class="title"><?=$product['title']?></a><br/>
                                <p class="price">$<?=$product['price']?></p>
                                <a href="#" class="btn btn-inverse" data-id="<?php echo $product['id'];?>">В корзину</a>

                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
                <hr>
                <div class="pagination pagination-small pagination-centered">
                <?php echo $pagination->get(); ?>
                </div>
            </div>
            <?php include(ROOT . '/views/layouts/right_box.php');?>
        </div>
    </section>
<?php include(ROOT . '/views/layouts/footer.php');?>