<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header() ?>

<?php if (have_posts()):?>
<?php while (have_posts()): the_post();?>
<main>
    <div class="container container--title">
      <h1 class="title"><?php the_title() ?></h1>
    </div>
    <div class="container container--content-page">
      <?php the_content() ?>
    </div>
  </main>
<?php endwhile?>
<?php else:?>
  <?php get_template_part("template-parts/content", "none") ?>
<?php endif?>

<?php get_footer() ?>