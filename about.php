<?php session_start(); ?>
<body>
  <?php require 'templates/header.php'; ?>
  <?php require 'database/requests.php'; ?>

  <div class='container'>
    <div class="center">
    <h1>О нас</h1>
    <div class='container'>

    <div id="viewport">
      <div class="slider">
        <?php foreach($sliderItems as $item): ?>
          <!-- цикл ввывода слайда-->
          <div class="slide"><p><?= $item['product'] ?></p><img src="<?= $item['image'] ?>" alt=""></div>
        <?php endforeach ?>
      </div>
    </div>

    <div class="center">
      
    <h2>Девиз - "Качество, профессионализм, эффективность - мы поможем вам достичь успеха!"</h2>  

    </div>
    <div class='slider-button'>
      <button class="prev btn" id="prev">Назад</button>
      <button class="next btn" id="next">Вперёд</button>
    </div>

  </div>
    </div>
    
    <div class='content_about'>
       
        <p>Мы специализируемся на продаже копировального оборудования от ведущих мировых производителей, предлагая широкий ассортимент высококачественных копировальных машин, принтеров и сканеров. Наша команда экспертов поможет вам выбрать наилучший вариант для ваших бизнес-потребностей и предоставит полный спектр услуг по установке, настройке и обслуживанию оборудования. Мы гарантируем высокое качество продукции и профессиональный уровень сервиса, чтобы помочь нашим клиентам достичь максимальной эффективности и экономии времени и ресурсов.</p>
        <img src="/assets/images/efeb472d10ed096b0761022b117561f84b77fd.jpg" alt="">
    </div>

</body>