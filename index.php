<?php require_once('class/data.php') ?>

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
    <h3>Jumlah item: <?= Menu::getCount() ?></h3>
    <form action="confirm.php" method="post">
        <div class="menu-items">
          <?php foreach ($menus as $menu): ?>
            <div class="menu-item">
                <img src="<?= $menu->getImage() ?>">
                <h3 class="menu-item-name"><?= $menu->getName() ?></h3>
                <?php if($menu instanceof Drink):?>
                <p class="menu-item-type"><?= $menu->getType() ?></p>
                <?php endif ?>
                <p class="price">$<?= $menu->getTaxIncludedPrice() ?> (termasuk pajak)</p>
                <p>Qty: <?= $menu->getOrderCount(); ?></p>
                <input type="text" value="0" name="<?= $menu->getName() ?>">
            </div>
          <?php endforeach ?>
        </div>
        <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>