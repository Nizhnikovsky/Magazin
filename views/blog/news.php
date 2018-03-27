<?php include(ROOT . '/views/layouts/header.php');?>
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Блог</h2>
                    <p><a href="/">На главную</a> | Блог</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog content section start -->
<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="tb-post-item">
                        <a href="#">
                            <div class="tb-thumb">
                                <img src="/template/img/banner/12.jpg" alt="">
                                <span class="tb-publish font-noraure-3"><?=$news['post_date']?></span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <?php print_r($news['title']);?>
                            <a href="#"><h4 class="tb-titlel"><?=$news['title']?></h4></a>
                            <div class="blog-info">
                                    <span class="author-name">
                                        <i class="fa fa-user"></i>
                                        By
                                        <a href="#"><?=$news['author']?></a>
                                    </span>
                                <span class="categories">
                                        <i class="fa fa-tag"></i>
                                        <a href="#"><?=$news['category']?></a>
                                        ,
                                        <a href="#">Lorem</a>
                                    </span>
                                <span class="comments-number">
                                        <i class="fa fa-comment"></i>
                                        <a href="#"><?=$news['comments']?>t</a>
                                    </span>
                            </div>
                            <div class="tb-excerpt"> <?=$news['body']?> </div>
                        </div>
                    </div>
            </div>
            <?php include(ROOT . '/views/blog/block_content.php');?>
        </div>
    </div>
</section>
<!-- Blog content section end -->
<?php include(ROOT . '/views/layouts/footer.php');?>
