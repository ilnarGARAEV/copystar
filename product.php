<?php session_start(); ?>
<body>
  <?php require 'templates/header.php'; ?>
  <?php require 'database/requests.php'; ?>

  <div class='container d-flex'>

    <div>
      <img class='product-image' src="<?= $product['image']; ?>" alt="">
    </div>

    <form action="database/addbasket.php" method='post' class='product'>
      <p class='product-name'>Модель: <?= $product['product']; ?></p>
      <p class='product-name'>Тип устройства: <?= $product['category']; ?></p>
      <p class='product-price'>Цена: <?= $product['price']; ?> Р </p>
      <p class='product-price'>Год производства:<?= $product['year']; ?></p>
      <p class='product-price'>Страна производства: <?= $product['country']; ?></p>
      <input name='id' value='<?= $product['id']; ?>' type="hidden">
      <input placeholder='Введите количество' class="form_actions" name='count' type="number">
      <button class="btn">В корзину</button>
      <!-- форма создание продукта    -->
    </form>

  </div>
</body>