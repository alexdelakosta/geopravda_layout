<? include 'section-header.php'; ?>

<section class="page-header-section">
  <div class="container">
    <div class="page-header">

      <ul class="breadcrumb">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Блог</a></li>
        <li><span>Как поставить недвижимость на кадастровый учет?</span></li>
      </ul>

      <h1 class="title">Как поставить недвижимость на кадастровый учет?</h1>

    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="page-grid">
      <div class="page-grid__body">

        <div class="article-row article-row--lg">
          <div class="article-row__cover">
            <div class="el-cover">
              <img src="<?= $path->upload; ?>/card-cover-1.jpg">
            </div>
          </div>
          <div class="article_row__content">
            <div class="article-row__foot">
              <div class="el-avatar">
                <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
                <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
              </div>
              <div class="author-col left">
                <div class="author-col__name">
                  Автор: Ирина Иванова
                </div>
                <div class="author-col__info">
                  20 июня 2023 · Обновлено 11 июля 2024
                </div>
              </div>
              <div class="share-col">
                <div class="share-col__info">
                  <svg style="width: 18px; height: 18px;"><use xlink:href="<?= $path->icons; ?>#eye"></use></svg>
                  Просмотров: 1210
                </div>
                <a class="btn btn--sm btn--silver" href="#">
                  <svg><use xlink:href="<?= $path->icons; ?>#share"></use></svg>
                  Поделиться
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="module-categories hide-md hide-lg">
          <div class="module-categories-head">
            Оглавление
          </div>
          <div class="module-categories-body">
            <ul>
              <li><a href="#">Что такое кадастровый учет и зачем он нужен?</a></li>
              <li><a href="#">Основные понятия и законодательная база</a></li>
              <li><a href="#">Когда требуется постановка объекта на кадастровый учет?</a></li>
              <li><a href="#">Специфика сбора документов в разных случаях</a></li>
              <li><a href="#">Процедура подачи документов</a></li>
              <li><a href="#">Электронная подача документов на кадастровый учет</a></li>
              <li><a href="#">Стоимость и сроки кадастрового учета</a></li>
              <li><a href="#">Часто возникающие проблемы учете недвижимости</a></li>
              <li><a href="#">Как проверить статус кадастрового учета?</a></li>
              <li><a href="#">Выводы и рекомендации</a></li>
            </ul>
          </div>
        </div>

        <div class="page-grid__article">
          
          <h2>Основные понятия и законодательная база</h2>
          <p>Наиболее значимым является Федеральный закон от 24 июля 2007 года № 221-ФЗ "О государственном кадастре недвижимости", который определяет правовые основы формирования и ведения государственного кадастра недвижимости, а также устанавливает порядок кадастрового учета. Согласно закону, ключевым документом, подтверждающим факт постановки объекта на кадастровый учет, является кадастровый паспорт, который содержит основные сведения об объекте: его местоположение, размеры, назначение и т.д.</p>
          <p><img src="<?= $path->upload; ?>/article-image-1.jpg"></p>
          <h2>Основные понятия и законодательная база</h2>
          <p>Наиболее значимым является Федеральный закон от 24 июля 2007 года № 221-ФЗ "О государственном кадастре недвижимости", который определяет правовые основы формирования и ведения государственного кадастра недвижимости, а также устанавливает порядок кадастрового учета. Согласно закону, ключевым документом, подтверждающим факт постановки объекта на кадастровый учет, является кадастровый паспорт, который содержит основные сведения об объекте: его местоположение, размеры, назначение и т.д.</p>
          <p><img src="<?= $path->upload; ?>/article-image-2.jpg"></p>
          <? include $path->include . '/module-consultation.php'; ?>
          <h2>Когда требуется постановка объекта на кадастровый учет?</h2>
          <ul>
            <li>Создание нового объекта недвижимости (новостройки, реконструкция)</li>
            <li>Изменение характеристик существующего объекта (перепланировка)</li>
            <li>Раздел земельного участка (перераспределение, изменение границ и тд)</li>
            <li>Прекращение существования объекта (снос здания, части здания)</li>
          </ul>
          <p>Какие документы требуются в зависимости от объекта недвижимости</p>
          <p>Для земельного участка требуются правоустанавливающие документы, подтверждающие право собственности на землю: это может быть свидетельство о праве собственности, договор купли-продажи, дарения. Кроме того, необходим кадастровый план участка, содержащий информацию об его границах, местоположении, площади и категории земель.</p>
          <p>Для строений также нужны правоустанавливающие документы (свидетельство о праве собственности, договор купли-продажи и т.д.), а также технический план объекта. Технический план должен включать в себя сведения о параметрах здания или сооружения, его этажности, общей и жилой площади, назначении помещений.</p>

        </div>
        
        <div class="article-author">
          <div class="article-author__body">
            <div class="el-avatar el-avatar--red hide-sm hide-md hide-lg">
              <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
              <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
            </div>
            <div class="el-avatar el-avatar--md el-avatar--red hide-xs">
              <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#md"></use></svg>
              <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
            </div>
            <div class="author">
              <div class="author__title">Автор: Ирина Иванова</div>
              <div class="author__subtitle">Кадастровый инженер</div>
            </div>
          </div>
          <div class="article-author__foot">
            <a class="btn btn--red" href="#">
              <svg style="width: 16px; height: 15px;"><use xlink:href="<?= $path->icons; ?>#telegram"></use></svg>
              Написать в Telegram
            </a>
          </div>
        </div>

      </div>
      <div class="page-grid__sidebar">

        <div class="module-categories hide-xs hide-sm">
          <div class="module-categories-head">
            Оглавление
          </div>
          <div class="module-categories-body">
            <ul>
              <li><a href="#">Что такое кадастровый учет и зачем он нужен?</a></li>
              <li><a href="#">Основные понятия и законодательная база</a></li>
              <li><a href="#">Когда требуется постановка объекта на кадастровый учет?</a></li>
              <li><a href="#">Специфика сбора документов в разных случаях</a></li>
              <li><a href="#">Процедура подачи документов</a></li>
              <li><a href="#">Электронная подача документов на кадастровый учет</a></li>
              <li><a href="#">Стоимость и сроки кадастрового учета</a></li>
              <li><a href="#">Часто возникающие проблемы учете недвижимости</a></li>
              <li><a href="#">Как проверить статус кадастрового учета?</a></li>
              <li><a href="#">Выводы и рекомендации</a></li>
            </ul>
          </div>
        </div>

        <? include $path->include . '/module-feedback.php'; ?>

      </div>
    </div>
  </div>
</section>



<section class="section section-blog">
  <div class="container">
    <div class="section__container">
      <div class="section__head section-blog__head">
        <div class="title">Другие статьи</div>
        <a class="more hide-sm hide-md hide-lg" href="#">Все статьи</a>
      </div>
      <div class="section-blog__tabs">
        <div class="nav-tabs" data-tabs>
          <a class="nav-tabs__item active" data-tabs="articles" data-tabs-link="category" href="#">Из категории</a>
          <a class="nav-tabs__item" data-tabs="articles" data-tabs-link="popular" href="#">Популярные</a>
        </div>
        <a class="btn btn--silver hide-xs" href="#">Все статьи</a>
      </div>

      <div class="section__body section-blog__body" data-tabs="articles" data-tabs-item="category">
        <div data-slider="blog">
          <? 
          for ($i = 1; $i <= 5; $i++) {
            include 'include/article-card.php';
          }
          ?>
        </div>
      </div>

      <div class="section__body section-blog__body" data-tabs="articles" data-tabs-item="popular">
        <div data-slider="blog">
          <? 
          for ($i = 1; $i <= 4; $i++) {
            include 'include/article-card.php';
          }
          ?>
        </div>
      </div>

    </div>
  </div>
</section>



<? include $path->include . '/banner-1.php'; ?>



<? include 'section-footer.php'; ?>