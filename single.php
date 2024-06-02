<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            if (get_post_type() == 'team_member') {
                // Display Team Member details
                ?>
                <article <?php post_class(); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="team-member-photo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div class="team-member-details">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'role', true)); ?></h2>
                        <div class="team-member-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
                <?php
            } elseif (get_post_type() == 'project') {
                // Display Project details
                ?>
                <article <?php post_class(); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="project-featured-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div class="project-details">
                        <div class="project-description">
                            <?php the_content(); ?>
                        </div>
                        <div class="project-meta">
                            <span class="project-type"><?php echo get_the_term_list(get_the_ID(), 'project_type', 'Type: ', ', '); ?></span>
                            <span class="project-release-date"><?php echo get_the_term_list(get_the_ID(), 'release_date', 'Release Date: ', ', '); ?></span>
                        </div>
                    </div>
                </article>
                <?php
            } else {
                // Display default post content
                ?>
                <article <?php post_class(); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>