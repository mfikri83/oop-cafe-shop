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
            <img src="<?= $menu->image ?>">
            <h3 class="menu-item-name"><?= $menu->name ?></h3>
            <p class="price">$<?= $menu->price ?></p>
        </div>
      <?php endforeach ?>
      
    </div>
  </div>
</body>
</html>