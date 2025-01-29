<?
$page_index = true;
?>

<? include 'section-header.php'; ?>

<section class="section-hello">
  <div class="container">
    <div class="section-hello__container">
      <div class="title">
        Необходимо подготовить документы и зарегистрировать загородный дом <br class="hide-lg">
        <span>без похода в офис, МФЦ и бумажной волокиты?</span>
      </div>
      <div class="info">
        Проводим все виды инженерных и кадастровых работ, готовим документы в срок от 2-х дней. <br>
        Без предоплаты
        <a class="btn btn--white hide-xs" href="#">
          Получить консультацию
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 18.364V18.364C14.849 21.879 9.15101 21.879 5.63601 18.364V18.364C2.12101 14.849 2.12101 9.15101 5.63601 5.63601V5.63601C9.15101 2.12101 14.849 2.12101 18.364 5.63601V5.63601C21.879 9.15101 21.879 14.849 18.364 18.364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M15 9L9 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M10.5 9H15V13.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
        </a>
        <a class="btn btn--green-full hide-sm hide-md hide-lg" href="#">
          Получить консультацию
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 18.364V18.364C14.849 21.879 9.15101 21.879 5.63601 18.364V18.364C2.12101 14.849 2.12101 9.15101 5.63601 5.63601V5.63601C9.15101 2.12101 14.849 2.12101 18.364 5.63601V5.63601C21.879 9.15101 21.879 14.849 18.364 18.364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M15 9L9 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M10.5 9H15V13.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
        </a>
      </div>
    </div>
  </div>
</section>



<section class="section section-categories">
  <div class="container">
    <div class="section__container">
      <div class="section__body section-categories__body-nav" data-slider="categories-nav">
        <a class="active" href="#">Кадастровые <br>работы</a>
        <a href="#">Геодезические <br>работы</a>
        <a href="#">Обмеры и <br>инвентаризации</a>
      </div>
      <div class="section__body section-categories__body" data-slider="categories">

        <div class="category-card">
          <div class="category-card__cover">
            <img src="<?= $path->images; ?>/category-cover-1.webp">
          </div>
          <div class="category-card__head">
            <div class="title --font-title">Кадастровые <br class="hide-md hide-lg">работы</div>
          </div>
          <div class="category-card__body">
            <a href="#">Технический план</a>
            <a href="#">Техническая инвентаризация</a>
            <a href="#">Снятие с кадастрового учета <br>(акт обследования)</a>
            <a href="#">Межевой план</a>
            <a href="#">Кадастровый инженер</a>
          </div>
        </div>

        <div class="category-card">
          <div class="category-card__cover">
            <img src="<?= $path->images; ?>/category-cover-2.webp">
          </div>
          <div class="category-card__head">
            <div class="title --font-title">Геодезические <br class="hide-md hide-lg">работы</div>
          </div>
          <div class="category-card__body">
            <a href="#">Технический план</a>
            <a href="#">Техническая инвентаризация</a>
            <a href="#">Снятие с кадастрового учета <br>(акт обследования)</a>
            <a href="#">Межевой план</a>
            <a href="#">Кадастровый инженер</a>
          </div>
        </div>

        <div class="category-card">
          <div class="category-card__cover">
            <img src="<?= $path->images; ?>/category-cover-3.webp">
          </div>
          <div class="category-card__head">
            <div class="title --font-title">Обмеры и <br class="hide-md hide-lg">инвентаризации</div>
          </div>
          <div class="category-card__body">
            <a href="#">Технический план</a>
            <a href="#">Техническая инвентаризация</a>
            <a href="#">Снятие с кадастрового учета <br>(акт обследования)</a>
            <a href="#">Межевой план</a>
            <a href="#">Кадастровый инженер</a>
          </div>
        </div>


      </div>
      <div class="section__body section-categories__body-banner">

        <? include $path->include . '/banner-price.php'; ?>

      </div>
    </div>
  </div>
</section>



<? include $path->include . '/banner-2.php'; ?>



<section class="section section-project">
  <div class="container">
    <div class="section__container">
      <div class="section__head section-project__head section__head--row">
        <div class="title">
          Умеем работать с любыми ситуациями, включая работу с самостроем
        </div>
        <div class="text hide-md hide-lg">
          В прошлом году поставили на учет ﻿больше 400 объектов недвижимости
        </div>
        <div class="subtitle subtitle--w2">
          Все 100% клиентов, которые обратились к нам получили необходимый результат
        </div>
      </div>
      <div class="section__subhead section-project__subhead section__subhead--row">
        <div class="title hide-xs hide-sm">
          В прошлом году поставили на учет ﻿больше 400 объектов недвижимости
        </div>
        <div class="buttons subtitle--w2">
          <a class="btn btn--silver" href="#">Смотреть все проекты</a>
          <div>
            <a class="btn btn--silver btn--round btn--arrow-prev" href="#" data-slider-project="prev">
              <svg style="width:16px;height:16px;"><use xlink:href="<?= $path->icons; ?>#arrow-left"></use></svg>
            </a>
            <a class="btn btn--silver btn--round btn--arrow-next" href="#" data-slider-project="next">
              <svg style="width:16px;height:16px;"><use xlink:href="<?= $path->icons; ?>#arrow-right"></use></svg>
            </a>
          </div>
        </div>
      </div>      
      <div class="section__body section-project__body" data-slider="project">
        <? 
        for ($i = 1; $i <= 3; $i++) {
          include 'include/project-card.php';
        }
        ?>
      </div>
    </div>
  </div>
</section>



<? include $path->include . '/banner-3.php'; ?>



<section class="section">
  <div class="container">
    <div class="section__container">
      <div class="section__head section__head--row">
        <div class="title"><span class="--color-red">1000+</span> положительных отзывов на проверенных площадках</div>
        <div class="subtitle subtitle--w2">Посмотрите, что говорят <br class="">о нашей работе клиенты</div>
      </div>
      <div class="section__body section-reviews__body">

        <div class="review-col">
          <div class="review-col__head">
            <svg style="width: 80px;height: 27px;"><use xlink:href="<?= $path->icons; ?>#logo-2gis"></use></svg>
            <div class="el-rating el-rating--one">
              <div class="stars">
                <div class="stars-this" style="width: 80%"></div>
                <div class="stars-bg"></div>
              </div>
            </div>
            <div class="info">
              4.8 рейтинг <a href="#">112+ отзывов</a>
            </div>
            <a class="btn" href="#">
              <svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#plus"></use></svg>
              Добавить отзыв
            </a>
          </div>

          <div class="divider"></div>

          <div class="review-col__body">
            <? 
            for ($i = 1; $i <= 3; $i++) {
              include 'include/review-card.php';
            }
            ?>
          </div>

          <div class="review-col__foot">
            <a class="btn btn--silver" href="#">Читать все отзывы</a>
          </div>
        </div>

        <div class="divider"></div>

        <div class="review-col">
          <div class="review-col__head">
            <svg style="width: 80px;height: 27px;"><use xlink:href="<?= $path->icons; ?>#logo-yandex"></use></svg>
            <div class="el-rating el-rating--one">
              <div class="stars">
                <div class="stars-this" style="width: 80%"></div>
                <div class="stars-bg"></div>
              </div>
            </div>
            <div class="info">
              4.8 рейтинг <a href="#">112+ отзывов</a>
            </div>
            <a class="btn" href="#">
              <svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#plus"></use></svg>
              Добавить отзыв
            </a>
          </div>

          <div class="divider"></div>

          <div class="review-col__body">
            <? 
            for ($i = 1; $i <= 3; $i++) {
              include 'include/review-card.php';
            }
            ?>
          </div>

          <div class="review-col__foot">
            <a class="btn btn--silver" href="#">Читать все отзывы</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>



<? include $path->include . '/banner-4.php'; ?>



<section class="section section-blog">
  <div class="container">
    <div class="section__container">
      <div class="section__head section__head--row">
        <div class="title">В своем блоге пишем полезные статьи для клиентов и партнеров</div>
        <div class="subtitle">Чтобы вы смогли быстрее разобраться в важных деталях и найти ответы на свои вопросы</div>
      </div>
      <div class="section__body section-blog__body active" data-slider="blog">
        <? 
        for ($i = 1; $i <= 5; $i++) {
          include 'include/article-card.php';
        }
        ?>
      </div>
    </div>
  </div>
</section>



<? include $path->include . '/banner-1.php'; ?>



<script src="https://api-maps.yandex.ru/2.1/?apikey=02eb700c-1512-4d6b-b9b1-662145821ae7&lang=ru_RU" type="text/javascript"></script>

<section class="section section-contact">
  <div class="container">
    <div class="section__container section-contact__container">
      <div class="section__head">
        <div class="title">Контакты компании Геоправда</div>
        <div class="subtitle">Свяжитесь с нами любым удобным способом</div>
      </div>
      <div class="section-contact__info">
        <div class="item">
          <svg class="--color-brown"><use xlink:href="<?= $path->icons; ?>#map"></use></svg>
          <div class="--color-brown">Адрес</div>
          <div class="--font-second">Санкт-Петербург, Детский переулок, дом 5, офис 123</div>
        </div>
        <div class="item">
          <svg class="--color-brown"><use xlink:href="<?= $path->icons; ?>#phone"></use></svg>
          <div class="--color-brown">Телефон</div>
          <div class="--font-second">+7 (812) 317-77-57</div>
        </div>
        <div class="item">
          <svg class="--color-brown"><use xlink:href="<?= $path->icons; ?>#clock"></use></svg>
          <div class="--color-brown">График работы</div>
          <div class="--font-second">9.00 - 18.00 пн.-пт.</div>
          <div>(время в часовом поясе офиса)</div>
        </div>
      </div>
      <div class="section-contact__map" id="map"></div>
    </div>
  </div>
</section>


<? include 'section-footer.php'; ?>