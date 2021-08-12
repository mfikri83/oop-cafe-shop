<?php 
// import class
require_once('Drink.php');
require_once('Food.php');
require_once('Review.php');

// instance class Drink
$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png','dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png','panas');

// instance class Food
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png',3);
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png',1);

$menus = [$juice,$coffee,$curry,$pasta];

// instance class Review
$review1 = new Review($juice->getName(), 'Yummy');
$review2 = new Review($curry->getName(), 'Sangat sehat');

$reviews = [$review1,$review2];

?>