<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 19.02.2018
 * Time: 19:53
 */

$manWear = Category::getCategoriesList(1,1);
$manShoes = Category::getCategoriesList(1,2);
$manAcsessories = Category::getCategoriesList(1,3);
$womanWear = Category::getCategoriesList(2,1);
$womanShoes = Category::getCategoriesList(2,2);
$womanAcsessories = Category::getCategoriesList(2,3);
$babyWear = Category::getCategoriesList(3,1);
$babyShoes = Category::getCategoriesList(3,2);
$babyAcsessories = Category::getCategoriesList(3,3);
