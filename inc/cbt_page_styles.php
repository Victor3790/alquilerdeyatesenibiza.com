<?php
function cbt_page_styles(){
  if(is_page() && !is_front_page()){
    //Get the header image background in differente sizes.
    $cbt_bg_small         = get_the_post_thumbnail_url($post->ID, 'cbt_small');
    $cbt_bg_small_retina  = get_the_post_thumbnail_url($post->ID, 'cbt_small_retina');
    $cbt_bg_large         = get_the_post_thumbnail_url($post->ID, 'cbt_large');
?>
<style type="text/css">
  .pageHeader{
    background-image: url("<?php echo $cbt_bg_small; ?>");
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (                min-resolution: 192dpi) and (max-width: 576px),
  only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {
    .pageHeader{
      background-image: url("<?php echo $cbt_bg_small_retina; ?>");
    }
  }

  @media (min-width: 768px){
    .pageHeader{
      background-image: url("<?php echo $cbt_bg_large; ?>");
    }
  }
</style>
<?php
  }
}
?>
