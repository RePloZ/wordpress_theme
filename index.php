  <body>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

    <?php endwhile; ?>

    <?php
    if ( get_next_posts_link() ) {
    next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
    previous_posts_link();
    }
    ?>

    <?php else: ?>

    <p>No posts found. :(</p>

    <?php endif; ?>
    <?php wp_footer(); ?>
  </body>
