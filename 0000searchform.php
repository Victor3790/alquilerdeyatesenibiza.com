<form role="search" method="get" action="<?php echo home_url('/'); ?>">
  <input type="text" name="eslora" value="Eslora">
  <input type="text" name="manga" value="Manga">
  <input type="text" name="invitados" value="Invitados">
  <input type="text" name="anio" value="Año">
  <input type="hidden" name="post_type" value="yate">
  <input type="submit" name="" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
</form>
