<?php get_header(); ?>

<main>
    <h1><?php _e('Projects', 'creative-agency-theme'); ?></h1>
    <div class="projects">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_field('project_name'); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="project-description">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'creative-agency-theme'); ?></a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
