<?php
function cbt_index_styles(){
  if(is_front_page()){
    $cbt_uri = get_template_directory_uri();
?>
<style type="text/css">
  .hero{
    background-position: center;
  }

  #slide1{
    background-image: url("<?php echo $cbt_uri ?>/imgs/slide1Small.jpg");
  }
  #slide2{
    background-image: url("<?php echo $cbt_uri ?>/imgs/slide2Small.jpg");
  }
  #slide3{
    background-image: url("<?php echo $cbt_uri ?>/imgs/slide3Small.jpg");
  }
  .form{
    background-image: url("<?php echo $cbt_uri ?>/imgs/form-backgroundSmall.jpg");
  }
  #asset__image1{
    background-image: url("<?php echo $cbt_uri ?>/imgs/asset1Small.jpg");
  }

  #asset__image2{
    background-image: url("<?php echo $cbt_uri ?>/imgs/asset2Small.jpg");
  }

  #asset__image3{
    background-image: url("<?php echo $cbt_uri ?>/imgs/asset3Small.jpg");
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
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide1SmallRetina.jpg");
    }
    #slide2{
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide2SmallRetina.jpg");
    }
    #slide3{
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide3SmallRetina.jpg");
    }

  }

  @media (min-width: 768px){
    #slide1{
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide1.jpg");
    }
    #slide2{
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide2.jpg");
    }
    #slide3{
      background-image: url("<?php echo $cbt_uri ?>/imgs/slide3.jpg");
    }
    .form{
      background-image: url("<?php echo $cbt_uri ?>/imgs/form-background.jpg");
    }
    #asset__image1{
      background-image: url("<?php echo $cbt_uri ?>/imgs/asset1.jpg");
    }

    #asset__image2{
      background-image: url("<?php echo $cbt_uri ?>/imgs/asset2.jpg");
    }

    #asset__image3{
      background-image: url("<?php echo $cbt_uri ?>/imgs/asset3.jpg");
    }
  }
</style>
<?php
  }
}
?>
