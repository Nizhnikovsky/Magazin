<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
    <div class="widget_searchform_content active">
        <form action="#">
            <input type="text" value="" name="s" placeholder="Поиск">
            <input type="submit" value="Найти">
        </form>
    </div>
    <div class="zo-recent-posts">
        <h3 class="wg-title">Недавние посты</h3>
        <ul>
            <?php foreach ($latestPosts as $post):?>
                <li>
                    <div class="tb-recent-thumbb">
                        <a href="">
                            <img class="attachment" src="/template/img/banner/s1.jpg" alt="">
                        </a>
                        <div class="recent-thumb-overlay"></div>
                    </div>
                    <div class="tb-recentb">
                        <div class="tb-postb">
                            <p><?=$post['body']?></p>
                        </div>
                        <div class="tb-postd">
                            <span><?=$post['post_date']?></span>
                        </div>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="zo-recent-posts3">
        <h3 class="wg-title">Последние коментарии</h3>
        <?php foreach ($comments as $comment):?>
            <li>
                <div class="tb-postd">
                    <span><?=$comment['author']?></span>
                </div>
                <div class="tb-recentb">
                    <div class="tb-postb">
                        <p><?=$comment['body']?></p>
                    </div>
                </div>
            </li>
        <?php endforeach;?>
    </div>
    <div class="zo-recent-posts2">
        <h3 class="wg-title">Архив</h3>
        <ul>
            <?php foreach ($posts_date as $post): ?>
                <li>
                    <a href="#"><?=Blog::convertDate($post['post_date'])?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="zo-recent-posts2 os4">
        <h3 class="wg-title">Категории</h3>
        <ul>
            <?php foreach ($post_categories as $category): ?>
                <li>
                    <a href="#"><?=$category['category']?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>