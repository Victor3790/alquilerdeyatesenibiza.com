<div class="swiper-container">
  <div class="swiper-wrapper">

  <div class="swiper-slide">
    <div id="slide1" class="hero">
      <div class="hero__text-container">
        <p class="hero__text-header">
          Alquiler de yates en Ibiza
        </p>
        <p class="hero__text-header">SIN INTERMEDIARIOS</p>
        <a href="<?php the_field('alquiler_yates'); ?>">
          <div class="button button--black">
            <p>Read more</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="swiper-slide">
    <div id="slide2" class="hero">
      <div class="hero__text-container">
        <p class="hero__text-header">
          Alquiler de yates de lujo
        </p>
        <p class="hero__text">
          Toda la oferta náutica a su alcance en una sola gestión y sin costes adicionales.
        </p>
        <a href="<?php the_field('yates_lujo'); ?>">
          <div class="button button--black">
            <p>Leer más</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="swiper-slide">
    <div id="slide3" class="hero">
      <div class="hero__text-container">
        <p class="hero__text-header">
          LUXURY YACHTING EXPERTS
        </p>
        <p class="hero__text">
          YACHTING SINCE 1991
        </p>
      </div>
    </div>
  </div>

  </div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>

<div class="welcome">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="welcome__title" data-aos="fade-up" data-aos-duration="1000">Bienvenido a Alquiler de Yates en Ibiza</h1>
        <h4 class="welcome__subtitle" data-aos="fade-up" data-aos-duration="1000">¿Desea alquilar un yate en Ibiza, Mallorca o cualquier otro destino del mundo?</h4>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/cbt_yacht_search_form' ); ?>

<div class="introduction">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="introduction__title">Alquiler de yates</h2>
        <h4 class="introduction__subtitle">Alquiler de Yates en Ibiza sin intermediarios</h4>
        <div class="introduction__text">
          <p>
            Alquiler de Yates en Ibiza S.L., ofrece una cuidada selección de
            alquiler de yates y barcos de lujo en Ibiza SIN INTERMEDIARIOS con
            la garantía que aporta un gran grupo de chárter con presencia
            internacional. Empresa líder especializada en vacaciones privadas
            en todo el mundo, con una flota de más de 4.000 yates de alquiler a motor.
          </p>
          <p>
            Nuestros yates están equipados con tripulaciones profesionales altamente
            cualificadas y un equipo que les complacerá en todo momento durante su estancia a bordo.
            Además de la actividad de alquiler de yates en Ibiza, ofrecemos servicios
            de brokerage relacionados con compraventa de yates y barcos de lujo en Ibiza
            procedentes de nuestra flota de embarcaciones, así como la construcción, venta
            de yates, alquiler de yates en Ibiza y la contratación de tripulaciones
            profesionales nativas de la isla de Ibiza. Alquilamos nuestra flota
            de yates y barcos a los mejores precios, SIN INTERMEDIARIOS, consulte nuestras
            ofertas de alquiler de yates en Ibiza, Formentera, Mallorca, Menorca y demás destinos a los
            mejores precios. Alquiler de yates en Ibiza S.L., está asociado a International Yachting Associations,
            a fin de poder garantizar toda la seguridad, calidad y confidencialidad durante
            su estancia a bordo.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="numbers">
  <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="numbers__title">IBIZA YACHTING GROUP<br> en cifras</h4>
        <div class="title-line title-line--center tittle-line--black"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <div id="scene1" class="numbers__item">
          <p class="numbers__item-top">Más de</p>
          <div class="numbers__item-number">
            <div id="odometer1" class="odometer">0</div><div class="odometer">0</div><div class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">yates gestionados</h4>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div id="scene2" class="numbers__item">
          <p class="numbers__item-top">Más de</p>
          <div class="numbers__item-number">
            <div id="odometer2" class="odometer">0</div><div id="odometer21" class="odometer">0</div><div class="odometer">0</div><div class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">clientes satisfechos</h4>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div id="scene3" class="numbers__item">
          <p class="numbers__item-top">Más de</p>
          <div class="numbers__item-number">
            <div id="odometer3" class="odometer">1</div><div id="odometer31" class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">años de experiencia</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main-yachts">
  <h2 class="main-yachts__title">Nuestros barcos</h2>
  <div class="container">
    <div class="row">
      <?php
          echo do_shortcode('[ic_add_posts post_type="yate" ids="1332,1346,1360" showposts="3"]');
          //echo do_shortcode('[ic_add_posts post_type="yate" ids="187,189,201" showposts="3"]');
      ?>
    </div>
  </div>
  <div class="yacht__button" style="position:static; width:250px;">
    <a href="https://alquilerdeyatesenibiza.com/yate/">
      <p>Ver todos</p>
    </a>
  </div>
</div>

<div class="assets">
  <div class="asset">
    <div id="asset__image1" class="asset__image"></div>
    <div class="asset__text-container">
      <h3 class="asset__title" data-aos="fade-left" data-aos-duration="1000">
        <?php the_field('asset_one_title'); ?>
      </h3>
      <p class="asset__text" data-aos="fade-left" data-aos-duration="1700">
        <?php the_field('asset_one_text'); ?>
      </p>
    </div>
  </div>

  <div class="asset">
    <div id="asset__image2" class="asset__image"></div>
    <div class="asset__text-container">
      <h3 class="asset__title" data-aos="fade-right" data-aos-duration="1000">
        <?php the_field('asset_two_title'); ?>
      </h3>
      <p class="asset__text" data-aos="fade-right" data-aos-duration="1700">
        <?php the_field('asset_two_text'); ?>
      </p>
    </div>
  </div>

  <div class="asset">
    <div id="asset__image3" class="asset__image"></div>
    <div class="asset__text-container">
      <h3 class="asset__title" data-aos="fade-left" data-aos-duration="1000">
        <?php the_field('asset_three_title'); ?>
      </h3>
      <p class="asset__text" data-aos="fade-left" data-aos-duration="1700">
        <?php the_field('asset_three_text'); ?>
      </p>
    </div>
  </div>
</div>

<div class="logos">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="logos__title">Algunas marcas con las que trabajamos</h4>
        <div class="title-line title-line--left tittle-line--white"></div>
      </div>
      <div class="container logos__container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Azimut.png" alt="Logo yates Azimut">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Mangusta.png" alt="Logo yates Mangusta">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Wally.png" alt="Logo yates Wally">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Riva.png" alt="Logo yates Riva">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Princess.png" alt="Logo yates Princess">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Astandoa.png" alt="Logo yates Astandoa">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Feadship.png" alt="Logo yates Feadship">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Oceanco.png" alt="Logo yates Oceanco">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Perini.png" alt="Logo yates Perini">
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="1000">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/Sunseeker.png" alt="Logo yates Sunseeker">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
