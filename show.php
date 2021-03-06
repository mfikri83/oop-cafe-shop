<?php
    require_once('classes/Menu.php');
    require_once('classes/data.php');

    $menuName = $_GET['name'];
    $menu = Menu::findByName($menus,$menuName);
    $menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?= $menu->getImage() ?>" alt="menu-photo">
      <h3 class="menu-item-name"><?= $menu->getName() ?></h3>
      <?php if($menu instanceof Drink) :?>
        <p class="menu-item-type"><?= $menu->getType() ?></p>
      <?php else : ?>
        <?php for ($i = 0; $i < $menu->getSpiciness(); $i++) : ?>
            <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" alt="chli-photo" class="icon-spiciness">
        <?php endfor?>
      <?php endif ?>
      <p class="price">$<?= $menu->getTaxIncludedPrice() ?></p>
    </div>
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>Ulasan</h4>
        </div>
        <?php foreach($menuReviews as $review) : ?>
          <?php $user = $review->getUser($users) ?>
          <div class="review-list-item">
            <div class="review-user">
              <?php if($user->getGender() == 'pria') :?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png" class='icon-user'>
              <?php else :?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png" class='icon-user'>
              <?php endif ?>
              <p><?= $user->getName() ?></p>
            </div>
            <p class="review-text"><?= $review->getBody() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">??? Kembali ke Menu</a>
  </div>
</body>
</html>