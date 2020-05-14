<div class="swiper-container">
  <div class="swiper-wrapper">

  <div class="swiper-slide">
    <div id="slide1" class="hero">
      <div class="hero__text-container">
        <p class="hero__text-header">
          Yacht charter in Ibiza
        </p>
        <p class="hero__text-header">WITHOUT INTERMEDIARIES</p>
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
          Luxury Yacht charter in Ibiza
        </p>
        <p class="hero__text">
          All the nautical offer at your fingertips, in a single process and with no additional costs
        </p>
        <a href="<?php the_field('yates_lujo'); ?>">
          <div class="button button--black">
            <p>Read more</p>
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
        <h1 class="welcome__title" data-aos="fade-up" data-aos-duration="1000">Welcome to Alquiler de Yates en Ibiza - Ibiza Yachting Group</h1>
        <h4 class="welcome__subtitle" data-aos="fade-up" data-aos-duration="1000">Do you want to charter a yacht in Ibiza, Mallorca or any other destination worldwide?</h4>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/cbt_yacht_search_form' ); ?>

<div class="introduction">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="introduction__title">Yacht charter</h2>
        <h4 class="introduction__subtitle">Yacht charter in Ibiza without intermediaries</h4>
        <div class="introduction__text">
          <p>
            Alquiler de Yates en Ibiza S.L. – Ibiza Yachting Group, offers you a careful
            selection of luxury yachts for chárter in Ibiza and worldwide, with
            NO INTERMEDIARIES and with the guarantee provided by a large charter company
            group with international presence. A Leading company specialized in private
            vacations worldwide, with a fleet of more than 4,000 yachts for charter.
          </p>
          <p>
            Our yachts have highly qualified professional crews that will take care
            of you at any time during your stay on board.
          </p>
          <p>
            Additionally to yacht charters in Ibiza, we offer brokerage services for
            all types of new or used yachts in Ibiza coming from our wide fleet.
            We will support and guide you, offering you the very best opportunities.
            We are also experts in Crew Recruitment of local Ibiza qualified crew.
          </p>
          <p>
            We rent our yachts and boats at the best prices, with no intermediaries
            or additional costs that other companies apply. Check out offers available
            on some of our yachts in Ibiza, Formentera, Mallorca, Menorca or any other
            destination at the very best prices
          </p>
          <p>
            Alquiler de yates en Ibiza S.L. – Ibiza Yachting Group is associated with
            International Yachting Associations, so we guarantee security, quality and
            privacy during your stay on board
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
        <h4 class="numbers__title">IBIZA YACHTING GROUP<br> in figures</h4>
        <div class="title-line title-line--center tittle-line--black"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <div id="scene1" class="numbers__item">
          <p class="numbers__item-top">More than</p>
          <div class="numbers__item-number">
            <div id="odometer1" class="odometer">0</div><div class="odometer">0</div><div class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">yachts managed</h4>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div id="scene2" class="numbers__item">
          <p class="numbers__item-top">More than</p>
          <div class="numbers__item-number">
            <div id="odometer2" class="odometer">0</div><div id="odometer21" class="odometer">0</div><div class="odometer">0</div><div class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">satisfied clients</h4>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div id="scene3" class="numbers__item">
          <p class="numbers__item-top">More than</p>
          <div class="numbers__item-number">
            <div id="odometer3" class="odometer">1</div><div id="odometer31" class="odometer">0</div>
          </div>
          <h4 class="numbers__item-text">years of experience</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main-yachts">
  <h2 class="main-yachts__title">Our yachts</h2>
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
      <p>View all</p>
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
        <h4 class="logos__title">Some of the brands we work with</h4>
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
