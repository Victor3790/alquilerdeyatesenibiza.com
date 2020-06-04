<?php
/**
 * Template for displaying a post in the [ic_add_posts] shortcode.
 *
 * @package   Posts_in_Page
 * @author    Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2019, IvyCat, Inc.
 * @link      https://ivycat.com
 * @since     1.0.0
 * @license   GPL-2.0-or-later
 */

?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Post Wrap Start-->
	<?php
		$fields = get_field_objects();
		$subField = get_field('sub_especificaciones');
	?>
	<div class="yacht__container col-12 col-md-6 col-lg-4">
	  <div class="yacht">
	    <h3 class="yacht__type">
	      <?php _e( $subField['tipo'], 'cbt'); ?>
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
	          <th class="yacht__detail-header"><?php _e( 'Length', 'cbt' ); ?></th>
	          <td class="yacht__detail-data"><?php the_field('eslora'); ?></td>
	        </tr>
	        <tr class="yacht__detail">
	          <th class="yacht__detail-header"><?php _e( 'Beam', 'cbt' ); ?></th>
	          <td class="yacht__detail-data"><?php the_field('manga'); ?></td>
	        </tr>
	        <tr class="yacht__detail">
	          <th class="yacht__detail-header"><?php _e( 'Passengers', 'cbt' ); ?></th>
	          <td class="yacht__detail-data"><?php echo ( $subField['invitados'] ); ?></td>
	        </tr>
	        <tr class="yacht__detail">
	          <th class="yacht__detail-header"><?php _e( 'Year', 'cbt' ); ?></th>
	          <td class="yacht__detail-data"><?php echo ( $subField['anio'] ); ?></td>
	        </tr>
	      </table>
	    </div>
	    <div class="yacht__button">
	      <a href="<?php the_permalink(); ?>">
	        <p><?php _e( 'View more', 'cbt' ); ?></p>
	      </a>
	    </div>
			<div class="yacht__price">
				<h5 class="yacht__price-title"><?php _e( 'Price', 'cbt' ); ?></h5><p class="yacht__price-text"><?php _e(get_field('precio'), 'cbt'); ?></p>
			</div>
	  </div>
	</div>

<!-- // Post Wrap End -->
