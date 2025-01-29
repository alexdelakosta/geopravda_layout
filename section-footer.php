<footer class="footer-section">
  <div class="container">
    <div class="footer">

      <div class="footer-logo">
        <svg class="hide-xs hide-sm"><use xlink:href="<?= $path->images; ?>/logo.svg?v=<?= time(); ?>#footer"></use></svg>
        <svg class="hide-md hide-lg"><use xlink:href="<?= $path->images; ?>/logo.svg?v=<?= time(); ?>#footer-xs"></use></svg>
      </div>

      <div class="footer-copy">
        <div class="hide-xs">
          Все виды кадастровых услуг <br>
          в Санкт-Петербурге и области
        </div>
        <div class="footer-copy__links">
          <a href="#">Политика конфиденциальности</a>
          <a href="#">Договор оферты</a>
        </div>
      </div>

      <div class="footer-body">

        <div class="footer-body__phone">
          <div class="text">Звоните! Расчет <br class="hide-sm hide-md hide-lg">стоимости за 5 мин</div>
          <a class="phone" rel="nofollow" href="#">+7 (812) 317-77-57</a>
          <div class="text-small">Все виды кадастровых услуг <br>в Санкт-Петербурге и области</div>
        </div>

        <div class="footer-body__social">
          <div class="links">
            <a href="#"><svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#whatsapp"></use></svg></a>
            <a href="#"><svg style="width: 18px;height: 16px;"><use xlink:href="<?= $path->icons; ?>#telegram"></use></svg></a>
            <a href="#"><svg style="width: 18px;height: 11px;"><use xlink:href="<?= $path->icons; ?>#vk"></use></svg></a>
          </div>
          <div class="text">Свяжитесь любым удобным способом</div>
        </div>

        <div class="footer-body__menu">
          <div class="item">
            <div class="item__head">Покупателям</div>
            <div class="item__body">
              <a href="#">Контакты</a>
              <a href="#">Обратная связь</a>
              <a href="#">Акции</a>
              <a href="#">Новости</a>
              <a href="#">Документы</a>
            </div>
          </div>
          <div class="item">
            <div class="item__head">О компании</div>
            <div class="item__body">
              <a href="#">Каталог услуг</a>
              <a href="#">Вакансии</a>
              <a href="#">Отзывы</a>
              <a href="#">Блог</a>
              <a href="#">Пригласить в тендер</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</footer>



<script src="<?= $path->js; ?>/jquery.min.js"></script>
<script src="<?= $path->js; ?>/jquery.slick.min.js"></script>
<script src="<?= $path->js; ?>/scripts.js?v=<?= $version; ?>"></script>

</body>
</html>