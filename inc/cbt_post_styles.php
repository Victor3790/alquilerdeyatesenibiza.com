<?php
function cbt_post_styles(){
  global $post;
  if(is_single()){
    //Get the header image background in differente sizes.
    $cbt_bg_large                   = get_the_post_thumbnail_url($post->ID, 'cbt_large_yacht');
    $cbt_bg_small                   = get_the_post_thumbnail_url($post->ID, 'cbt_small');
    $cbt_bg_small_retina            = get_the_post_thumbnail_url($post->ID, 'cbt_small_retina');
    $cbt_bg_small_landscape         = get_the_post_thumbnail_url($post->ID, 'cbt_small_landscape');
    $cbt_bg_small_landscape_retina  = get_the_post_thumbnail_url($post->ID, 'cbt_small_landscape_retina');
?>
<style type="text/css">
  .blogHeader{
    background-image: url("<?php echo $cbt_bg_small; ?>");
    margin-top: 30px;
    height: 220px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (                min-resolution: 192dpi) and (max-width: 576px),
  only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {
    .blogHeader{
      background-image: url("<?php echo $cbt_bg_small_retina; ?>");
    }
  }

  @media  (max-width: 767px) and (orientation: landscape) {
    .blogHeader{
      background-image: url("<?php echo $cbt_bg_small_landscape; ?>");
      height: 400px;
    }
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 768px) and (orientation: landscape),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 192dpi) and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 2dppx)  and (max-width: 768px) and (orientation: landscape) {
    .blogHeader{
      background-image: url("<?php echo $cbt_bg_small_landscape_retina; ?>");
      height: 400px;
    }
  }

  @media (min-width: 768px){
    .blogHeader{
      background-image: url("<?php echo $cbt_bg_large; ?>");
      margin-top: 160px;
      height: 450px;
    }
  }


</style>
<?php
  }
}
?>
