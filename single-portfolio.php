<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1 style="color:<?php the_field('project_color'); ?>"><?php the_title(); ?></h1>

      <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Published on <?php the_date(); ?>
          by <?php the_author(); ?>
          Categories: <?php the_category(); ?>
          Tags: <?php the_tags(); ?>
        </p>
          <?php 
        	if( get_field( 'project_url' ) ): ?>
                <a target="_blank" href="<?=get_field('project_url'); ?>" >Project</a>
          <?php endif; ?>
          
          <?php if(get_field('release_date')): ?>
            <p>Release Date: <? the_field('realease_date'); ?></p>
           <?php endif; ?>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
        
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>