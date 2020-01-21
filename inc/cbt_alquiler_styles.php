<?php
function cbt_alquiler_styles(){
  if(is_page('alquiler-yates')){
    $image_id = get_field('alquiler_yates_imagen');
    //Get the header image background in differente sizes.
    $cbt_alquiler_bg_large                   = wp_get_attachment_image_src($image_id, 'cbt_large');
    $cbt_alquiler_bg_small                   = wp_get_attachment_image_src($image_id, 'cbt_small');
    $cbt_alquiler_bg_small_retina            = wp_get_attachment_image_src($image_id, 'cbt_small_retina');
    $cbt_alquiler_bg_small_landscape         = wp_get_attachment_image_src($image_id, 'cbt_small_landscape');
    $cbt_alquiler_bg_small_landscape_retina  = wp_get_attachment_image_src($image_id, 'cbt_small_landscape_retina');
?>
<style type="text/css">
  .pageImg{
    height: 300px;
    background-image: url("<?php echo $cbt_alquiler_bg_small[0]; ?>");
    background-position: center;
    background-size: cover;
    margin: 80px 0;
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (                min-resolution: 192dpi) and (max-width: 576px),
  only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {
    .pageImg{
      background-image: url("<?php echo $cbt_alquiler_bg_small_retina[0]; ?>");
    }
  }

  @media  (max-width: 768px) and (orientation: landscape) {
    .pageImg{
      background-image: url("<?php echo $cbt_alquiler_bg_small_landscape[0]; ?>");
    }
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 768px) and (orientation: landscape),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 192dpi) and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 2dppx)  and (max-width: 768px) and (orientation: landscape) {
    .pageImg{
      background-image: url("<?php echo $cbt_alquiler_bg_small_landscape_retina[0]; ?>");
    }
  }

  @media (min-width: 768px){
    .pageImg{
      height: 400px;
      background-image: url("<?php echo $cbt_alquiler_bg_large[0]; ?>");
    }
  }


</style>
<?php
  }
}
?>
