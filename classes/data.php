<?php 
// import class
require_once('Drink.php');
require_once('Food.php');
require_once('Review.php');
require_once('User.php');

// instance class Drink
$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png','dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png','panas');

// instance class Food
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png',3);
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png',1);

$menus = [$juice,$coffee,$curry,$pasta];

// instance class User
$user1 = new User('Alex','pria');
$user2 = new User('Watson','wanita');
$user3 = new User('Alex', 'wanita');
$user4 = new User('Chris', 'pria');

$users = [$user1,$user2,$user3,$user4];

// instance class Review
$review1 = new Review($juice->getName(), $user1->getId(), 'Yummy');
$review2 = new Review($curry->getName(), $user1->getId(), 'Sangat sehat');
$review3 = new Review($coffee->getName(), $user2->getId(), 'Wanginya harum');
$review4 = new Review($pasta->getName(), $user2->getId(), 'Sausnya enak :)');
$review5 = new Review($juice->getName(), $user3->getId(), 'Hanya jus jeruk biasa');
$review6 = new Review($curry->getName(), $user3->getId(), 'Rasanya enak untuk harganya');
$review7 = new Review($coffee->getName(), $user4->getId(), 'Kepahitannya cukup.');
$review8 = new Review($pasta->getName(), $user4->getId(), 'Banhan yang digunakan berkualitas.');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>