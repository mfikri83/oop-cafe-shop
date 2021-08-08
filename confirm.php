<!-- Import data.php -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bill</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <?php foreach ($menus as $menu): ?>
        <?php 
            $orderCount = $_POST[$menu->getName()];
            $menu->setOrderCount($orderCount);
        ?>
        <p class="order-amount">
            <?= $menu->getName() ?>
            x
            <?= $orderCount ?>
        </p>
        <p class="order-price">$<?= $menu->getTotalPrice() ?></p>
    <?php endforeach ?>
  </div>
</body>
</html>