<?php
/*
Template Name: home
*/
?>
<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>valyt</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
   <?php wp_head(); ?>
</head>

<body class="container">
  <main class="main">
    <ul class="slider">
      <li class="slider_item" style="background-image: url(<?php  bloginfo('template_url');?>/assets/img/car1.jpg);">">
        <a class="slider_btn" href="">Записаться онлайн</a>
      </li>
       <li class="slider_item" style="background-image: url(<?php  bloginfo('template_url');?>/assets/img/car1.jpg);">">
        <a class="slider_btn" href="">Записаться онлайн</a>
      </li>
       <li class="slider_item" style="background-image: url(<?php  bloginfo('template_url');?>/assets/img/car1.jpg);">">
        <a class="slider_btn" href="">Записаться онлайн</a>
      </li>
    </ul>
    <section class="about">
      <h1 class="about_title">Почему выбирают именно нас?</h1>

      <p class="about_text text1">
        Мы не просто создаём иллюзию работы, а действительно выполняем её, гарантируя безупречный
        результат и предоставляя гарантии.
      </p>
      <p class="about_text">
        После завершения всех процедур в нашем детейлинг-центре, ваш автомобиль будет выглядеть как
        новый.
      </p>
      <ol class="about_list">
        <li class="about_item">
          <h2 class="about_item_title">Команда профессионалов</h2>
          <p class="about_item_text">Работаем с 2010 года, все мастера имеют соответствующую аттестацию.</p>
        </li>
        <li class="about_item">
          <h2 class="about_item_title">Честная смета</h2>
          <p class="about_item_text">После первичной консультации озвучиваем стоимость наших услуг.</p>
        </li>
        <li class="about_item">
          <h2 class="about_item_title">Договор и гарантии</h2>
          <p class="about_item_text">Заключаем договор, даём 3 года гарантии на свои работы.</p>
        </li>
        <li class="about_item">
          <h2 class="about_item_title">Оплата по факту</h2>
          <p class="about_item_text">Наличная и безналичная формы оплаты после завершения всех работ.</p>
        </li>
      </ol>
    </section>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>