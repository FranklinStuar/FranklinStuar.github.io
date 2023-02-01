<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header() ?>

<?php if (have_posts()):?>
<?php while (have_posts()): the_post();?>
  <main class="single-content">
    <div class="container container--title container--blog">
      <div class="single-content__featured">
        <picture>
          <source media="(min-width: 768px)" srcset="<? echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>">
          <source srcset="<? echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>">
          <img src="<? echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" alt="<?php the_title() ?>"/>
        </picture>
      </div>
      <div class="single-content__content-title">
        <h1 class="title"><?php the_title() ?></h1>
        <div class="single-content__info"> <span class="single-content__date"><?php echo get_the_date() ?></span></div>
      </div>
    </div>
    <div class="container">
      <div class="container--content-page">
        <?php the_content() ?>
      </div>
    </div>
  </main>
<?php endwhile?>
<?php else:?>
  <?php get_template_part("template-parts/content", "none") ?>
<?php endif?>

<?php get_footer() ?>