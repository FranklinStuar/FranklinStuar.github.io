<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header() ?>

<?php if (have_posts()):?>
<?php while (have_posts()): the_post();?>
<main>
  <div class="main-home container" id="home">
    <div class="information">
      <h1 class="title-page">Hi, I'm <span>Franklin Peñafiel</span></h1><span>Wordpress Developer</span>
      <?php if ( have_rows( 'cta_buttons' ) ) : ?>
      <?php while ( have_rows( 'cta_buttons' ) ) : the_row(); ?>
      <div class="cta__container">
        <a class="cta__btn cta__btn--hire-me" href="<?php the_sub_field( 'hire_me_link' ); ?>">Hire me</a>
        <a class="cta__btn cta__btn--download-cv" href="<?php the_sub_field( 'cv_link' ); ?>" download
          target="_blank">Download CV</a>
      </div>
      <?php endwhile; ?>
      <?php endif ?>
    </div>
  </div>
  <?php if(get_field( 'about_me' )): ?>
  <div class="about-me container" id="about-me">
    <div class="container-content">
      <h2 class="title">About me</h2>
      <p class="content">
        <?php the_field( 'about_me' ); ?>
      </p>
    </div>
  </div>
  <?php endif ?>
  
  <?php if(get_field( 'my_works' )): ?>
    <div class="my-work container" id="my-work">
      <div class="container-content">
        <h2 class="title">My work</h2>
        <p class="content">
          <?php the_field( 'my_works' ); ?>
        </p>
      </div>
      <div class="work__container">
        <?php if ( have_rows( 'repositories' ) ) : ?>
        <div class="work__container--projects">
          <?php while ( have_rows( 'repositories' ) ) : the_row(); ?>
  
          <a class="work__project" href="<?php the_sub_field( 'link' ); ?>">
            <i class="work__icon <?php the_sub_field( 'icon_font_awesome' ); ?>"></i>
            <span class="work__name"><?php the_sub_field( 'title' ); ?></span>
          </a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
  
        <?php if ( have_rows( 'companies' ) ) : ?>
        <div class="company__container-cards">
          <?php while ( have_rows( 'companies' ) ) : the_row(); ?>
          <div class="company__card">
            <div class="company__information"> <span class="company__name"><?php the_sub_field( 'name' ); ?></span>
              <p class="company__description"><?php the_sub_field( 'description' ); ?></p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
  
      </div>
    </div>
  <?php endif ?>

  <?php if ( have_rows( 'skills' ) ) : ?>
    <div class="skills container" id="skills">
      <div class="container-content">
        <h2 class="title">Skills</h2>
        <p class="content">
          <span>I was a full stack developer but I love all about design. I'm currently a frontend developer and I'm
            trying to do the best webs for my clients and my jobs</span>
        </p>
      </div>
      <div class="skills__container-slider">
        <div class="swiper skills__slider">
          <div class="swiper-wrapper">
            <?php while ( have_rows( 'skills' ) ) : the_row(); ?>
              <div class="swiper-slide skill__tecnology">
                <i class="skill__icon <?php the_sub_field( 'icon' ); ?>"></i>
                <span class="skill__name"><?php the_sub_field( 'name' ); ?></span>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  <?php endif; ?>


  <div class="get-in-touch container" id="get-in-touch">
    <div class="container-content">
      <h2 class="title">Work with me!</h2>
      <p class="content"> I would like we can tell about new projects or a new position of job. If you want contact me, you could send me a message on linkedin. You also can download my cv for more information about me and my work.</p>
      <?php if ( have_rows( 'cta_buttons' ) ) : ?>
      <?php while ( have_rows( 'cta_buttons' ) ) : the_row(); ?>

      <div class="cta__container">
        <a class="cta__btn cta__btn--hire-me" href="<?php the_sub_field( 'hire_me_link' ); ?>">Hire me</a>
        <a class="cta__btn cta__btn--download-cv" href="<?php the_sub_field( 'cv_link' ); ?>" download
          target="_blank">Download CV</a>
      </div>
      <?php endwhile; ?>
      <?php endif ?>
      <div class="social-icons"> <a class="social-icons__link"
          href="https://www.linkedin.com/in/franklin-penafiel-ramirez/"> <i
            class="social-icons__icon fa-brands fa-linkedin-in"></i></a><a class="social-icons__link"
          href="https://www.instagram.com/fstuar_dev/"> <i class="social-icons__icon fa-brands fa-instagram"></i></a>
      </div>
    </div>
  </div>
</main>
<?php endwhile?>
<?php else:?>
  <?php get_template_part("template-parts/content", "none") ?>
<?php endif?>

<?php get_footer() ?>