<?php if (!defined('ABSPATH')) { exit; } ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" media="print" onload="this.media='all'"> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
  </style>
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header-page">
      <div class="container">
        <nav class="menu">
          <div class="menu__icon-container"><i class="menu__icon menu__icon--open fa-solid fa-bars"> </i></div>
          <div class="menu__list--container"><i class="menu__icon menu__icon--opened fa-solid fa-xmark"> </i>
            <ul class="menu__list">

              <?php foreach(wp_get_nav_menu_items("Header") as $menuItem): ?>
                <li class="menu__item"><a class="menu__link" href="<?php echo $menuItem->url ?>"><?php echo $menuItem->title ?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </nav>
      </div>
    </header>