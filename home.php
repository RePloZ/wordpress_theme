<?php get_header(); ?>
    <div class="container">
        <div class="row">

 	<h1 class="col-md-12">Brunella's Agency</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"> 
                <div class="col p-4 d-flex flex-column position-static"></div>
                
                <h2><?php the_title(); ?></h2>
      
        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Published on <?php the_time( get_option( 'date_format' ) ); ?> 
                by <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Read more</a>
            </p>                                                     </div>
            
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

			
		</article>

	<?php endwhile; endif; ?>
            
        </div>
</div>
<?php get_footer(); ?>