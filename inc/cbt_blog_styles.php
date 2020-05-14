<?php
function cbt_blog_styles(){
  if(is_home()){
    $cbt_uri = get_template_directory_uri();
    //Get the header image background in differente sizes.
    $cbt_blog_image = $cbt_uri . '/imgs/ibiza-blog.jpg';
?>
<style type="text/css">
  .blogHeader{
    background-image: url("<?php echo $cbt_blog_image; ?>");
    margin-top: 30px;
    height: 220px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  @media  (max-width: 767px) and (orientation: landscape) {
    .blogHeader{
      height: 300px;
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
      height: 300px;
    }
  }

  @media (min-width: 768px){
    .blogHeader{
      margin-top: 170px;
    }
  }

  @media (min-width: 992px){
    .blogHeader{
      height: 350px;
    }
  }


</style>
<?php
  }
}
?>
