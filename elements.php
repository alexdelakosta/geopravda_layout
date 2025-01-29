<? include 'section-header.php'; ?>

<div class="_d-section">
  <div class="container">
    <div class="_d-head">Иконки</div>
    <div class="_d-body">
      <div class="_c-flex-row" style="align-items: center">
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#telegram"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#whatsapp"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#vk"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#share"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#phone"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#phone-plus"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#map"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#clock"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#shield"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#eye"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#calculator"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#check"></use></svg>
        <svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#arrow-left"></use></svg>
        <svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#arrow-right"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#arrow-up-right"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#plus"></use></svg>
        <svg style="width: 20px;height: 20px;"><use xlink:href="<?= $path->icons; ?>#play"></use></svg>
        <svg style="width: 40px;height: 40px;"><use xlink:href="<?= $path->icons; ?>#burger"></use></svg>
      </div>
    </div>
  </div>
</div>

<div class="_d-section">
  <div class="container">
    <div class="_d-head">
      Кнопки и метки
    </div>
    <div class="_d-body _d-body--col2">
      <div class="_c-flex-row">
        
        <a class="btn" href="#">Кнопка</a>
        <a class="btn btn--red" href="#">Кнопка</a>
        <a class="btn btn--silver" href="#">Кнопка</a>
        <a class="btn btn--green" href="#">Кнопка</a>
        <a class="btn btn--white" href="#">Кнопка</a>
        <a class="btn btn--brown" href="#">Кнопка</a>
        <a class="btn btn--lightbrown" href="#">Кнопка</a>
        <a class="btn btn--green" href="#">
          Кнопка
          <svg><use xlink:href="<?= $path->icons; ?>#telegram"></use></svg>
        </a>        
        <a class="btn btn--brown" href="#">
          <svg><use xlink:href="<?= $path->icons; ?>#whatsapp"></use></svg>
          Кнопка
        </a>

      </div>
      <div class="_c-flex-row">
        
        <a class="badge" href="#">Метка ссылка</a>
        <a class="badge badge--green" href="#">Метка ссылка</a>
        <a class="badge badge--orange" href="#">Метка ссылка</a>
        <a class="badge badge--red" href="#">Метка ссылка</a>

        <span class="badge">Метка текст</span>
        <span class="badge badge--green">Метка текст</span>
        <span class="badge badge--orange">Метка текст</span>
        <span class="badge badge--red">Метка текст</span>
      
      </div>
    </div>
  </div>
</div>


<div class="_d-section">
  <div class="container">
    <div class="_d-head">Аватарки</div>
    <div class="_d-body _d-body--col4">
      <div class="el-avatar">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
      <div class="el-avatar el-avatar--md">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
      <div class="el-avatar el-avatar--lg">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
    </div>
    <div class="_d-body _d-body--col4">                
      <div class="el-avatar el-avatar--red">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
      <div class="el-avatar el-avatar--md el-avatar--red">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
      <div class="el-avatar el-avatar--lg el-avatar--red">
        <svg><use xlink:href="<?= $path->images; ?>/avatar.svg?v=<?= $version; ?>#sm"></use></svg>
        <div class="avatar"><img src="<?= $path->upload; ?>/avatar.jpg"></div>
      </div>
    </div>
  </div>
</div>

<div class="_d-section">
  <div class="container">
    <div class="_d-head">Вспомогательные</div>
    <div class="_d-body _d-body--col4">
      <div class="">
        <p class="--font-title">Текст для примера</p>
        <p class="--font-second">Текст для примера</p>
      </div>
      <div class="">
        <p class="--color-red">Текст для примера</p>
        <p class="--color-green">Текст для примера</p>
        <p class="--color-lightbrown">Текст для примера</p>
        <p class="--color-brown">Текст для примера</p>
      </div>
    </div>
  </div>
</div>

<? include 'section-footer.php'; ?>