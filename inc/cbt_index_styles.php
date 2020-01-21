<?php
function cbt_index_styles(){
  if(is_front_page()){
    $cbt_uri = get_template_directory_uri();
?>
<style type="text/css">
  #slide1{
    background: #fff url("<?php echo $cbt_uri; ?>/imgs/slide1Small.jpg") center;
    background-size: cover;
  }
  #slide2{
    background: #fff url("<?php echo $cbt_uri; ?>/imgs/slide2Small.jpg") center;
    background-size: cover;
  }
  #slide3{
    background: #fff url("<?php echo $cbt_uri; ?>/imgs/slide3Small.jpg") top;
    background-size: cover;
  }
  .form{
    background: #fff url("<?php echo $cbt_uri; ?>/imgs/form-backgroundSmall.jpg") center;
  }
  #asset__image1{
    background-image: url("<?php echo $cbt_uri; ?>/imgs/asset1Small.jpg");
  }

  #asset__image2{
    background-image: url("<?php echo $cbt_uri; ?>/imgs/asset2Small.jpg");
  }

  #asset__image3{
    background-image: url("<?php echo $cbt_uri; ?>/imgs/asset3Small.jpg");
  }

  @media  (max-width: 768px) and (orientation: landscape) {
    #slide1{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide1SmallLandscape.jpg");
    }

    #slide2{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide2SmallLandscape.jpg");
    }

    #slide3{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide3SmallLandscape.jpg");
    }

  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 768px) and (orientation: landscape),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 192dpi) and (max-width: 768px) and (orientation: landscape),
  only screen and (                min-resolution: 2dppx)  and (max-width: 768px) and (orientation: landscape) {
    #slide1{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide1SmallLandscapeRetina.jpg");
    }

    #slide2{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide2SmallLandscapeRetina.jpg");
    }

    #slide3{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide3SmallLandscapeRetina.jpg");
    }
  }

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (   min--moz-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (     -o-min-device-pixel-ratio: 2/1)    and (max-width: 576px),
  only screen and (        min-device-pixel-ratio: 2)      and (max-width: 576px),
  only screen and (                min-resolution: 192dpi) and (max-width: 576px),
  only screen and (                min-resolution: 2dppx)  and (max-width: 576px) {

    .hero{
      background-position: bottom;
    }

    #slide1{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide1SmallRetina.jpg");
    }
    #slide2{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide2SmallRetina.jpg");
    }
    #slide3{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide3SmallRetina.jpg");
    }

  }

  @media (min-width: 768px){
    #slide1{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide1.jpg");
      background-position: top;
    }
    #slide2{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide2.jpg");
      background-position: top;
    }
    #slide3{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/slide3.jpg");
    }
    .form{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/form-background.jpg");
    }
    #asset__image1{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/asset1.jpg");
    }

    #asset__image2{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/asset2.jpg");
    }

    #asset__image3{
      background-image: url("<?php echo $cbt_uri; ?>/imgs/asset3.jpg");
    }
  }
</style>
<?php
  }
}
?>
