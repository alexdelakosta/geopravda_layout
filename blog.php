<? include 'section-header.php'; ?>



<section class="page-header-section">
  <div class="container">
    <div class="page-header">

      <ul class="breadcrumb">
        <li><a href="#">Главная</a></li>
        <li><span>Блог</span></li>
      </ul>

      <h1 class="title">Блог</h1>

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
          <div class="article-row__content">
            <div class="article-row__head">
              <div class="title">
                <a href="#">Как оформить землю в собственность?</a>
              </div>
              <div class="badges">
                <span class="badge badge--green">Технический план</span>
                <span class="badge badge--orange">Юридические</span>
                <span class="badge badge--red">Истории клиентов</span>
              </div>
            </div>
            <div class="article-row__body">
              Оформить землю в собственность - значит застраховать себя от незаконного использования вашего земельного участка, проблем при совершении сделок и других неприятностей. Рассмотрим наиболее распространенные случаи оформления земли в собственность.
            </div>
            <div class="article-row__foot">              
              <div class="el-avatar">
                <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
                <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
              </div>
              <div class="author-col">
                <div class="author-col__name">
                  Автор: Ирина Иванова
                </div>
                <div class="author-col__info">
                  <svg style="width: 18px; height: 18px;"><use xlink:href="<?= $path->icons; ?>#eye"></use></svg>
                  Просмотров: 1210
                </div>
              </div>
            </div>

          </div>
        </div>

        <? include $path->include . '/banner-consultation.php'; ?>

        <div class="article-rows">
          <? for ($i = 1; $i <= 5; $i++): ?>
            <div class="article-row">
              <div class="article-row__cover">
                <div class="el-cover">
                  <img src="<?= $path->upload; ?>/card-cover-1.jpg">
                </div>
              </div>
              <div class="article-row__content">
                <div class="article-row__head">
                  <div class="title">
                    <a href="#">Как оформить землю в собственность?</a>
                  </div>
                  <div class="badges">
                    <span class="badge badge--green">Технический план</span>
                    <span class="badge badge--orange">Юридические</span>
                    <span class="badge badge--red">Истории клиентов</span>
                  </div>
                </div>
                <div class="article-row__body">
                  Оформить землю в собственность - значит застраховать себя от незаконного использования вашего земельного участка, проблем при совершении сделок и других неприятностей. Рассмотрим наиболее распространенные случаи оформления земли в собственность.
                </div>
                <div class="article-row__foot">              
                  <div class="el-avatar">
                    <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
                    <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
                  </div>
                  <div class="author-col">
                    <div class="author-col__name">
                      Автор: Ирина Иванова
                    </div>
                    <div class="author-col__info">
                      <svg style="width: 18px; height: 18px;"><use xlink:href="<?= $path->icons; ?>#eye"></use></svg>
                      Просмотров: 1210
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <? endfor; ?>
        </div>

        <a class="btn btn--silver" href="#">Показать еще</a>

      </div>
      <div class="page-grid__sidebar">

        <div class="module-categories">
          <div class="module-categories-head">
            Категории
          </div>
          <div class="module-categories-body">
            <ul>
              <li><a href="#">Поэтажный план и экспликация</a></li>
              <li><a href="#">Технический план</a></li>
              <li><a href="#">Учет жилого дома</a></li>
              <li><a href="#">Учет хозяйственных построек</a></li>
              <li><a href="#">Учет машино-места</a></li>
              <li><a href="#">Регистрация договора аренды помещения</a></li>
              <li><a href="#">Технический паспорт</a></li>
              <li><a href="#">Технический паспорт квартиры</a></li>
              <li><a href="#">Снятие с учёта (Акт обследования)</a></li>
              <li><a href="#">Межевой план</a></li>
              <li><a href="#">Межевание (уточнение границ)</a></li>
              <li><a href="#">Раздел земельного участка</a></li>
              <li><a href="#">Объединение земельных участков</a></li>
              <li><a href="#">Перераспределение земельных участков</a></li>
              <li><a href="#">Учет санитарно-защитных зон (карта-план)</a></li>
              <li><a href="#">Проект межевания территории</a></li>
              <li><a href="#">Схема расположения на КПТ</a></li>
            </ul>
          </div>
        </div>

        <div class="module-categories">
          <div class="module-categories-head">
            Популярное
          </div>
          <div class="module-categories-body">
            <ul>
              <li><a class="badge badge--green" href="#">Как оформить землю ﻿в собственность?</a></li>
              <li><a class="badge badge--green" href="#">Как оформить дом в совместной собственности после реконструкции?</a></li>
              <li><a class="badge badge--green" href="#">Сосед требует передвинуть мой гараж</a></li>
              <li><a class="badge badge--green" href="#">Требования к обустройству дорог в садоводческом товариществе</a></li>
              <li><a class="badge badge--green" href="#">Соседи строят на границе участков и мы вообще не видим солнца</a></li>
            </ul>
          </div>
        </div>

        <? include $path->include . '/module-feedback.php'; ?>

      </div>
    </div>
  </div>
</section>






<? include 'section-footer.php'; ?>