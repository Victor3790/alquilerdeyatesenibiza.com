<div class="form">
  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="form__title">Encuentra el yate ideal</h4>
      </div>
      <div class="col-6">
        <select class="form__text-input" name="eslora">
          <option value="">Eslora</option>
          <option value="5">5 metros</option>
          <option value="10">10 metros</option>
          <option value="15">15 metros</option>
          <option value="20">20 metros</option>
        </select>
      </div>
      <div class="col-6">
        <select class="form__text-input" name="manga">
          <option value="">Manga</option>
          <option value="5">5 metros</option>
          <option value="10">10 metros</option>
          <option value="15">15 metros</option>
          <option value="20">20 metros</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="form__sub-title">Por número de invitados</p>
      </div>
      <div class="col-12">
        <input type="hidden" name="invitados" class="slider-invitados" value=""/>
      </div>
      <div class="col-12">
        <p class="form__sub-title">Por año</p>
      </div>
      <div class="col-12">
        <input type="hidden" name="anio" class="slider-anio" value=""/>
      </div>
      <div class="col-12">
        <input class="button button--gray form__button" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
      </div>
      <input type="hidden" name="post_type" value="yate">
    </div>
    </form>
  </div>
</div>
