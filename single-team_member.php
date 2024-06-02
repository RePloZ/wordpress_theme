<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <header>
                <h1><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h1>
                <?php if (get_field('photo')) : ?>
                    <div class="team-member-photo">
                        <img src="<?php echo esc_url(get_field('photo')['url']); ?>" alt="<?php the_field('first_name'); ?> <?php the_field('last_name'); ?>">
                    </div>
                <?php endif; ?>
            </header>
            <div class="team-member-details">
                <h2><?php the_field('role'); ?></h2>
                <div class="team-member-description">
                    <?php the_field('description'); ?>
                </div>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
