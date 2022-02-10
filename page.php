<?php get_header(); ?>
<div class="bread">
  <div class="contain">
    <div class="bread-w">
      <?php the_breadcrumb(); ?>
    </div>
  </div>
</div><!--bread-->
<div class="post post-2">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
      if( has_post_thumbnail() ) {
        echo '<div class="post-img-w"><img src="';
        echo the_post_thumbnail_url('news-img');
        echo '" alt="news-img"></div><!--post-img-w-->';
      }      
      ?>      
      <div class="post-title">
        <?php the_title(); ?>
      </div>      
      <div class="post-content">
        <?php the_content(); ?>
      </div><!--post-content-->
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
  </div><!--cont--> 
</div> 
<?php get_footer(); ?>