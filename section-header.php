<? 
$version = time(); 
$path = (object) [
  'css'     => '/assets/css',
  'js'      => '/assets/js',
  'images'  => '/assets/images',
  'include' => __DIR__ . '/include',
  'upload'  => '/upload',
  'icons'   => '/assets/images/icons.svg?='.$version,
];
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ГеоПравда</title>
	<link rel="shortcut icon" href="<?= $path->images; ?>/favicon.png" type="image/png">
  <link rel="stylesheet" href="<?= $path->css; ?>/styles.css?v=<?= $version; ?>" />
</head>
<body>



<!-- DEV MENU start -->
<div class="_dev_menu">
  <a href="/">Главная</a>
  <a href="/blog.php">Блог</a>
  <a href="/blog-page.php">Блог - Страница</a>
  <a href="/elements.php">* Элементы</a>
</div>
<script>
  var devMenu = document.querySelector('._dev_menu');
  var devMenuClose = document.querySelector('._dev_menu_close');
  devMenuClose.addEventListener('click', function() {
    devMenu.remove();
  });
</script>
<!-- DEV MENU /end-->



<section class="header-top-section">
  <div classs="container">
    <div class="header-top">

      <div class="item hide-xs hide-sm">
        <img class="item__icon" src="<?= $path->images; ?>/header-top-icon-1.webp">
        <div class="item__text">Лицензия СРО на <u>проектирование</u> и <u>строительство</u></div>
      </div>

      <div class="item">
        <img class="item__icon" src="<?= $path->images; ?>/header-top-icon-2.webp">
        <div class="item__text">Выполнили <u>1000+ проектов</u></div>
      </div>

    </div>
  </div>
</section>



<header class="header-section<? if ($page_index) echo ' header-section--white'; ?>">
  <div class="container">

    <div class="header-main">
      <a class="header-main__logo" href="/">
        <svg><use xlink:href="<?= $path->images; ?>/logo.svg?v=<?= time(); ?>#header"></use></svg>
      </a>

      <div class="header-main__text header-main__text--pc left">
        Все виды кадастровых услуг<br>
        в Санкт-Петербурге и области
      </div>
      <div class="header-main__text header-main__text--pc right">
        Звоните! Расчет стоимости за 5 мин<br>
        <a href="tel://+78123177757">+7 (812) <span class="--font-title">317-77-57</span></a>
      </div>
      
      <div class="header-main__text header-main__text--mb left">
        <a class="burger" rel="nofollow" href="#">
          <svg class="icon-burger"><use xlink:href="<?= $path->icons; ?>#burger"></use></svg>
          <svg class="icon-close"><use xlink:href="<?= $path->icons; ?>#close"></use></svg>
        </a>
      </div>
      <div class="header-main__text header-main__text--mb right">
        <a rel="nofollow" href="tel://+78123177757">
          <svg><use xlink:href="<?= $path->icons; ?>#phone"></use></svg>
        </a>
      </div>
    </div>

    <div class="header-menu">
      <ul>
        <li class="header-menu-item">
          <a class="header-menu-item__link" href="#">Главная</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link dropdown" href="#">Услуги</a>
          <div class="header-menu-item__dropdown">
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
          </div>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link" href="#">Цены</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link dropdown" href="#">О компании</a>
          <div class="header-menu-item__dropdown">
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
            <a href="#">Пункт меню</a>
          </div>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link" href="#">Вопрос-Ответ</a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link icon" href="#">
            <svg style="width: 24px; height: 24px;"><use xlink:href="<?= $path->icons; ?>#calculator"></use></svg>
            Калькулятор стоимости
          </a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-item__link" href="#">Блог</a>
        </li>
      </ul>
    </div>

  </div>
</header>

