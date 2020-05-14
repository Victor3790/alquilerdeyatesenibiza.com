<div class="cbt-form">
  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="cbt-form__title"><?php _e('Yacht search', 'cbt'); ?></h4>
      </div>
      <div class="col-12 col-md-6">
        <div class="cbt-form__text-input">
          <input class="cbt_form_hidden" type="hidden" name="tipo" value="">
          <p class="cbt-form__title-input"><?php _e('Yacht type', 'cbt'); ?></p>
          <div class="cbt-form__display">
            <img class="cbt-form__display-arrow" src="<?php echo get_template_directory_uri(); ?>/imgs/display.png" alt="Mostrar los tipos de yates">
          </div>
          <ul class="cbt-form__options">
            <li class="cbt-form__option" id="1"><?php _e('Motor', 'cbt'); ?></li>
            <li class="cbt-form__option" id="2"><?php _e('Sail', 'cbt'); ?></li>
            <li class="cbt-form__option" id=""><?php _e('Both', 'cbt'); ?></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="cbt-form__text-input">
          <input class="cbt_form_hidden" type="hidden" name="camarotes" value="">
          <p class="cbt-form__title-input"><?php _e('Number of cabins', 'cbt'); ?></p>
          <div class="cbt-form__display">
            <img class="cbt-form__display-arrow" src="<?php echo get_template_directory_uri(); ?>/imgs/display.png" alt="Mostrar los tipos de yates">
          </div>
          <ul class="cbt-form__options">
            <li class="cbt-form__option" id="1">1</li>
            <li class="cbt-form__option" id="2">2</li>
            <li class="cbt-form__option" id="3">3</li>
            <li class="cbt-form__option" id="4">4</li>
            <li class="cbt-form__option" id="5">5</li>
            <li class="cbt-form__option" id="6">6 <?php _e('or more', 'cbt'); ?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="cbt-form__sub-title"><?php _e('By length', 'cbt'); ?></p>
      </div>
      <div class="col-12">
        <input type="hidden" name="eslora" class="slider-eslora" value=""/>
      </div>
      <div class="col-12">
        <p class="cbt-form__sub-title"><?php _e('By price', 'cbt'); ?></p>
      </div>
      <div class="col-12">
        <input type="hidden" name="precio" class="slider-precio" value=""/>
      </div>
      <div class="col-12">
        <input class="button button--gray cbt-form__button" type="image" src="<?php echo get_template_directory_uri(); ?>/imgs/magnifier.png" alt="submit">
      </div>
      <input type="hidden" name="post_type" value="yate">
      <input type="hidden" name="busqueda" value="1">
    </div>
    </form>
  </div>
</div>
