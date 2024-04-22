<header class="header header-wh" id="header">
  <div class="header-container l-container">
    <div class="header-language">
      <img src="/assets/img/language.png" class="header-language__img">
      <ul id="header-language__list" class="header-language__list">
        <li class="header-language__item" value=""><span class="header-language__selected"><?php get_selected_lang_name();?></span></li>
        <?php if($area == 'NahaChatan') : ?>
          <li class="header-language__item" value=""><a href="/jorge/poster/nahachatan" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/nahachatan-en" class="header-language__link"><?php the_lang_word('en');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/nahachatan-cn" class="header-language__link"><?php the_lang_word('cn');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/nahachatan-tc" class="header-language__link"><?php the_lang_word('tc');?></a></li>
        <?php elseif($area == 'Miyoshi') : ?>
          <li class="header-language__item" value=""><a href="/jorge/poster/miyoshi" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/miyoshi-en" class="header-language__link"><?php the_lang_word('en');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/miyoshi-cn" class="header-language__link"><?php the_lang_word('cn');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster/miyoshi-tc" class="header-language__link"><?php the_lang_word('tc');?></a></li>
        <?php else : ?>
          <li class="header-language__item" value=""><a href="/jorge/poster-ja" class="header-language__link"><?php the_lang_word('ja');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster-en" class="header-language__link"><?php the_lang_word('en');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster-cn" class="header-language__link"><?php the_lang_word('cn');?></a></li>
          <li class="header-language__item" value=""><a href="/jorge/poster-tc" class="header-language__link"><?php the_lang_word('tc');?></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</header>
