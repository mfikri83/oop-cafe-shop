<?php
    require_once('class/Menu.php');
    require_once('class/data.php');

    $menuName = $_GET['name'];
    $menu = Menu::findByName($menus,$menuName);
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
  <div class="review-wrapper container">
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
    <a href="index.php">← Kembali ke Menu</a>
  </div>
</body>
</html>