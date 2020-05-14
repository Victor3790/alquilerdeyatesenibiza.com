<?php global $wp_query; ?>
<div class="col-12 col-md-6 col-lg-4">
  <div class="cbt_post_thumbnail row">
		<div class="col-5 col-md-12">
			<?php the_post_thumbnail('cbt_thumbnail'); ?>
		</div>
    <div class="col-7 col-md-12">
      <div class="post-info-container">
        <p class="post-info"><?php echo get_the_date(); ?></p>
        <p class="post-info">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</p>
        <p class="post-info"><?php the_category($wp_query->post->ID); ?></p><br>
      </div>
      <a href="<?php the_permalink(); ?>">
        <h3 class="post-title">
          <?php the_title(); ?>
        </h3>
      </a>
    </div>
  </div>
</div>
