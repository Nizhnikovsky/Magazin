<?php include (ROOT.'/views/layouts/header.php');?>
<section class="header_text sub">
    <img class="pageBanner" src="/template/images/pageBanner.png" alt="New products" >
    <h4><span>Детали товара</span></h4>
</section>
<?= print_r($_POST)?>
<section class="main-content">
    <div class="row">
        <div class="span9">
            <div class="row">
                <div class="span4">
                    <a href="<?php echo Product::getImage($product['id'].'.1'); ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo Product::getImage($product['id'].'.1'); ?>"></a>
                    <ul class="thumbnails small">
                        <li class="span1">
                            <a href="<?php echo Product::getImage($product['id'].'.2'); ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo Product::getImage($product['id'].'.2'); ?>" alt=""></a>
                        </li>
                        <li class="span1">
                            <a href="<?php echo Product::getImage($product['id'].'.3'); ?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="<?php echo Product::getImage($product['id'].'.3'); ?>" alt=""></a>
                        </li>
                        <li class="span1">
                            <a href="<?php echo Product::getImage($product['id'].'.4'); ?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="<?php echo Product::getImage($product['id'].'.4'); ?>" alt=""></a>
                        </li>
                        <li class="span1">
                            <a href="<?php echo Product::getImage($product['id'].'.5'); ?>" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="<?php echo Product::getImage($product['id'].'.5'); ?>" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="span5">
                    <address>
                        <strong>Бренд:</strong> <span><?=$product['brand']?></span><br>
                        <strong>Код товара:</strong> <span><?=$product['code']?></span><br>
                        <strong>Наличие:</strong> <span><?php echo Product::getAvailabilityText($product['availability'])?></span><br>
                    </address>
                    <h4><strong>Цена: $<?=$product['price']?></strong></h4>
                </div>
                <div class="span5">
                    <form class="form-inline">
                        <label class="checkbox">
                            <input type="checkbox" value=""> Перезвонить мне
                        </label>
                        <br/>
                        <label class="checkbox">
                            <input type="checkbox" value=""> Прислать мне подтверждение заказа
                        </label>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <a href="#" class="btn btn-inverse" data-id="<?=$product['id']; ?>" type="submit"><i class="fa fa-shopping-cart"></i> В корзину</a>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="span9">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#home">Описание товара</a></li>
                        <li class=""><a href="#profile">Дополнительная информация</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home"> <?=$product['description']; ?></div>
                        <div class="tab-pane" id="profile">
                            <table class="table table-striped shop_attributes">
                                <tbody>
                                <tr class="">
                                    <th>Размеры</th>
                                    <td><?=$product['sizes']; ?></td>
                                </tr>
                                <tr class="alt">
                                    <th>Цвета</th>
                                    <td><?=$product['color']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="span9">
                    <h4 class="title">
                    <span class="pull-left">
                        <span class="text"><strong>Отзывы о</strong> Товаре</span>
                    </span>
                    </h4>
                    Реализовать вывод отзывов о товаре с паггинацией, по 3-4 комментария
                </div>
                <div class="span9">
                    <br>
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><strong>Сопутсвующие</strong> Товары</span></span>
                        <span class="pull-right">
                <a class="left button" id="prev" href="#myCarousel-2" data-slide="#prev"></a><a class="right button" id="next" href="#myCarousel-2" data-slide="#next"></a>
            </span>
                    </h4>
                    <div class="cycle-slideshow"
                         data-cycle-fx=carousel
                         data-cycle-timeout=6000
                         data-cycle-carousel-visible=3
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
            </div>
        </div>
        <?php include (ROOT.'/views/layouts/right_box.php');?>
    </div>
</section>
<?php include (ROOT.'/views/layouts/footer.php');?>
<script src="/template/js/common.js"></script>
<script>
    $(function () {
        $('#myTab a:first').tab('show');
        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    })
    $(document).ready(function() {
        $('.thumbnail').fancybox({
            openEffect  : 'none',
            closeEffect : 'none'
        });

        $('#myCarousel-2').carousel({
            interval: 2500
        });
    });
</script>
</body>
</html>

