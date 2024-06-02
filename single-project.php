<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <header>
                <h1><?php the_field('project_name'); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="project-featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
            </header>
            <div class="project-details">
                <div class="project-description">
                    <?php the_field('description'); ?>
                </div>
                <div class="project-meta">
                    <span class="project-type"><?php _e('Type:', 'creative-agency-theme'); ?> <?php the_field('project_type'); ?></span>
                    <span class="project-release-date"><?php _e('Release Date:', 'creative-agency-theme'); ?> <?php the_field('release_date'); ?></span>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
