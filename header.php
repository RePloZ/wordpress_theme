<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
   <link rel="profile" href="https://gmpg.org/xfn/11">
    
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  <script type="module">
import swiper from 'https://cdn.jsdelivr.net/npm/swiper@11.1.3/+esm'
</script>

    <?php if (is_single() || is_page()): ?>
        <meta name="title" content="<?php single_post_title(); ?>">
    <?php else: ?>
        <meta name="title" content="<?php bloginfo('name'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div x-data="{ open: false }">
    <button @click="open = !open" class="px-4 py-2 bg-blue-500 text-white rounded"></button>
    <div x-show="open" class="mt-4 p-4 bg-gray-100 border rounded">
        <p></p>
    </div>
</div>
<header>
    <nav>
        <?php wp_nav_menu(['theme_location' => 'primary']); ?>
    </nav>
</header>
<main>

