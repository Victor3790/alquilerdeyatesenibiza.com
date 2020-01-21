<?php
	$fields = get_field_objects();
	$subField = get_field('sub_especificaciones');
?>
<div class="yacht__container col-12 col-md-6 col-lg-4 col-xl-3">
  <div class="yacht">
    <h3 class="yacht__type">
      <?php echo ( $subField['tipo'] ); ?>
    </h3>
    <h2 class="yacht__name">
      <?php the_title(); ?>
    </h2>
		<div class="yacht__picture">
			<?php echo get_the_post_thumbnail(); ?>
		</div>
    <div class="yacht__details">
      <table>
        <tr class="yacht__detail">
          <th class="yacht__detail-header">Eslora</th>
          <td class="yacht__detail-data"><?php the_field('eslora'); ?></td>
        </tr>
        <tr class="yacht__detail">
          <th class="yacht__detail-header">Manga</th>
          <td class="yacht__detail-data"><?php the_field('manga'); ?></td>
        </tr>
        <tr class="yacht__detail">
          <th class="yacht__detail-header">Pasajeros</th>
          <td class="yacht__detail-data"><?php echo ( $subField['invitados'] ); ?></td>
        </tr>
        <tr class="yacht__detail">
          <th class="yacht__detail-header">Año</th>
          <td class="yacht__detail-data"><?php echo ( $subField['anio'] ); ?></td>
        </tr>
      </table>
    </div>
    <div class="button button--gray yacht__button">
      <a href="<?php the_permalink(); ?>">
        <p>Ver más</p>
      </a>
    </div>
  </div>
</div>
