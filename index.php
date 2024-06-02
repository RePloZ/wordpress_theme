<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creative-agency-theme
 */

get_header(); ?>

<body>
    <h1><?php bloginfo("name"); ?></h1>
    <h2><?php bloginfo("description"); ?></h2>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

    <h3><?php the_title(); ?></h3>

    <div>
      <div class="grid grid-cols-10 gap-2">
        <div class="bg-sky-50 aspect-square"></div>
        <div class="bg-sky-100 aspect-square"></div>
        <div class="bg-sky-200 aspect-square"></div>
        <div class="bg-sky-300 aspect-square"></div>
        <div class="bg-sky-400 aspect-square"></div>
        <div class="bg-sky-500 aspect-square"></div>
        <div class="bg-sky-600 aspect-square"></div>
        <div class="bg-sky-700 aspect-square"></div>
        <div class="bg-sky-800 aspect-square"></div>
        <div class="bg-sky-900 aspect-square"></div>
      </div>
      <div class="grid grid-cols-10 gap-2">
        <div class="bg-blue-50 aspect-square"></div>
        <div class="bg-blue-100 aspect-square"></div>
        <div class="bg-blue-200 aspect-square"></div>
        <div class="bg-blue-300 aspect-square"></div>
        <div class="bg-blue-400 aspect-square"></div>
        <div class="bg-blue-500 aspect-square"></div>
        <div class="bg-blue-600 aspect-square"></div>
        <div class="bg-blue-700 aspect-square"></div>
        <div class="bg-blue-800 aspect-square"></div>
        <div class="bg-blue-900 aspect-square"></div>
      </div>
      <div class="grid grid-cols-10 gap-2">
        <div class="bg-indigo-50 aspect-square"></div>
        <div class="bg-indigo-100 aspect-square"></div>
        <div class="bg-indigo-200 aspect-square"></div>
        <div class="bg-indigo-300 aspect-square"></div>
        <div class="bg-indigo-400 aspect-square"></div>
        <div class="bg-indigo-500 aspect-square"></div>
        <div class="bg-indigo-600 aspect-square"></div>
        <div class="bg-indigo-700 aspect-square"></div>
        <div class="bg-indigo-800 aspect-square"></div>
        <div class="bg-indigo-900 aspect-square"></div>
      </div>
      <div class="grid grid-cols-10 gap-2">
        <div class="bg-violet-50 aspect-square"></div>
        <div class="bg-violet-100 aspect-square"></div>
        <div class="bg-violet-200 aspect-square"></div>
        <div class="bg-violet-300 aspect-square"></div>
        <div class="bg-violet-400 aspect-square"></div>
        <div class="bg-violet-500 aspect-square"></div>
        <div class="bg-violet-600 aspect-square"></div>
        <div class="bg-violet-700 aspect-square"></div>
        <div class="bg-violet-800 aspect-square"></div>
        <div class="bg-violet-900 aspect-square"></div>
      </div>
    </div>

    <div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

    <?php
        endwhile; ?>

    <?php if (get_next_posts_link()) {
        next_posts_link();
    } ?>
    <?php if (get_previous_posts_link()) {
        previous_posts_link();
    } ?>

    <?php
    else:
         ?>

    <p>No posts found. :(</p>

    <?php
    endif; ?>
  </body>

<?php
get_sidebar();
get_footer();

?>
