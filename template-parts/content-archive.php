<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php get_header() ?>

<?php if (have_posts()):?>
<main class="archive">
  <div class="container container--title">
    <h1 class="title"><?php the_archive_title() ?></h1>
  </div>
  <div class="container">
    <div class="container--content-page">
      <div class="posts-list">
        <?php while (have_posts()): the_post();?>
        <div class="post"> 
          <a class="post__link--title" href="#">
            <h3 class="post__title"><?php the_title() ?></h3>
          </a>
          <div class="post__description"><?php echo get_the_excerpt() ?></div>
          <div class="post__container-button"> <a class="post__link" href="#">View More </a></div>
        </div>
        <?php endwhile?>
      </div>
    </div>
  </div>
</main>
<?php else:?>
<?php get_template_part("template-parts/content", "none") ?>
<?php endif?>

<?php get_footer() ?>