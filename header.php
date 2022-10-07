<?php if (!defined('ABSPATH')) { exit; } ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,800&display=swap');
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
              <li class="menu__item"><a class="menu__link" href="./">Home</a></li>
              <li class="menu__item"><a class="menu__link" href="./page.html">Page</a></li>
              <li class="menu__item"><a class="menu__link" href="./single.html">Post</a></li>
              <li class="menu__item"><a class="menu__link" href="./archive.html">Archives</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>