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
                <?php foreach ($posts as $post):?>
                <div class="tb-post-item">
                    <a href="#">
                        <div class="tb-thumb">
                            <img src="/template/img/banner/12.jpg" alt="">
                            <span class="tb-publish font-noraure-3"><?=$post['post_date']?></span>
                        </div>
                    </a>
                    <div class="tb-content7">
                        <a href="#"><h4 class="tb-titlel"><?=$post['title']?></h4></a>
                        <div class="blog-info">
                                    <span class="author-name">
                                        <i class="fa fa-user"></i>
                                        By
                                        <a href="#"><?=$post['author']?></a>
                                    </span>
                            <span class="categories">
                                        <i class="fa fa-tag"></i>
                                        <a href="#"><?=$post['category']?></a>
                                        ,
                                        <a href="#">Lorem</a>
                                    </span>
                            <span class="comments-number">
                                        <i class="fa fa-comment"></i>
                                        <a href="#"><?=$post['comments']?>t</a>
                                    </span>
                        </div>
                        <div class="tb-excerpt"> <?=$post['body']?> </div>
                        <a class="blog7" href="/blog/<?=$post['id']?>">READ MORE</a>
                    </div>
                </div>
               <?php  endforeach;?>
                <nav class="pagination tb-pagination text-right">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                </nav>
            </div>
            <?php include(ROOT . '/views/blog/block_content.php');?>
        </div>
    </div>
</section>
<!-- Blog content section end -->
<?php include(ROOT . '/views/layouts/footer.php');?>
