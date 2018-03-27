<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 12.03.2018
 * Time: 21:50
 */
class Blog
{
    public static function getPosts()
    {
        $db=Db::getConnection();
    
        $sql ="SELECT * FROM `posts`";
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
    
        $PostsList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $PostsList[$i]['id'] = $row['id'];
            $PostsList[$i]['title'] = $row['title'];
            $PostsList[$i]['category'] = $row['category'];
            $PostsList[$i]['body'] = $row['body'];
            $PostsList[$i]['post_date'] = $row['post_date'];
            $PostsList[$i]['author'] = $row['author'];
            $PostsList[$i]['comments'] = $row['comments'];
            $i++;
        }
        return $PostsList;
    }

    public static function getOnePost($id)
    {
        $db=Db::getConnection();
    
        $sql ="SELECT * FROM `posts` WHERE id =:id";
    
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполнение коменды
        $result->execute();
        return $result->fetch();
       
    }
    public static function getPostsCategories()
    {
        $db=Db::getConnection();
    
        $sql ="SELECT category FROM `posts`";
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
    
        $categoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $categoryList[$i]['category'] = $row['category'];
            $i++;
        }
        return $categoryList;
    }
    public static function getPostsDate()
    {
        $db=Db::getConnection();
    
        $sql ="SELECT `post_date` FROM `posts` ";
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
        $categoryList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $categoryList[$i]['post_date'] = $row['post_date'];
            $i++;
        }
        return $categoryList;
        
    }
    public static function convertDate($date)
    {
       $date = explode('-',$date);
       switch ($date[1]){
           case 1:
               $date[1]='Январь';
               break;
           case 2:
               $date[1]='Февраль';
               break;
           case 3:
               $date[1]='Март';
               break;
           case 4:
               $date[1]='Апрель';
               break;
           case 5:
               $date[1]='Май';
               break;
           case 6:
               $date[1]='Июнь';
               break;
           case 7:
               $date[1]='Июль';
               break;
           case 8:
               $date[1]='Август';
               break;
           case 9:
               $date[1]='Сентябрь';
               break;
           case 10:
               $date[1]='Октябрь';
               break;
           case 11:
               $date[1]='Ноябрь';
               break;
           case 12:
               $date[1]='Декабрь';
               break;
       }
       $peace = [$date[1],$date[0]];
       $date = implode(' ',$peace);
       return $date;
    }
    public static function getComments()
    {
        $db=Db::getConnection();
    
        $sql ="SELECT * FROM `comments` ORDER BY id DESC LIMIT 4";
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
    
        $commentsList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $commentsList[$i]['body'] = $row['body'];
            $commentsList[$i]['author'] = $row['author'];
            $i++;
        }
        return $commentsList;
    }
    public static function getLatestPosts()
    {
        $db=Db::getConnection();
    
        $sql ="SELECT * FROM `posts` ORDER BY post_date DESC LIMIT 4";
    
        $result = $db->prepare($sql);
        // Выполнение коменды
        $result->execute();
    
        $postsList=array();
        $i=0;
        while ($row=$result->fetch())
        {
            $postsList[$i]['body'] = $row['body'];
            $postsList[$i]['post_date'] = $row['post_date'];
            $i++;
        }
        return $postsList;
    }
}