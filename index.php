<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Shop</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Shop</h1>
    <div class="menu-items">
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
            <img src="<?= $menu->getImage() ?>">
            <h3 class="menu-item-name"><?= $menu->getName() ?></h3>
            <p class="price">$<?= $menu->getTaxIncludedPrice() ?> (termasuk pajak)</p>
            <p>Qty: <?= $menu->getOrderCount(); ?></p>
        </div>
      <?php endforeach ?>
      
    </div>
  </div>
</body>
</html>