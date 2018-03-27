<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 12.03.2018
 * Time: 21:47
 */

class BlogController
{
    public function actionIndex()
    {
        $comments = Blog::getComments();
        $latestPosts = Blog::getLatestPosts();
        $posts_date = Blog::getPostsDate();
        $post_categories = Blog::getPostsCategories();
        $posts = Blog::getPosts();
        require_once(ROOT . '/views/blog/index.php');
        require_once(ROOT . '/views/blog/blog_content.php');
        return true;
    }

    public static function actionNews($id)
    {
        $comments = Blog::getComments();
        $latestPosts = Blog::getLatestPosts();
        $posts_date = Blog::getPostsDate();
        $post_categories = Blog::getPostsCategories();
        $news = Blog::getOnePost($id);
        require_once(ROOT . '/views/blog/news.php');
        require_once(ROOT . '/views/blog/blog_content.php');
        return true;
    }
}

