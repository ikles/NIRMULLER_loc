<?php get_header(); ?>

<div class="blog-items">  
    <div class="blog-w">
      <div class="blog-news-items">

        <?php
        $parent_id = get_queried_object_id();





# получаем дочерние рубрики
        $sub_cats = get_categories( array(
          'child_of' => $parent_id,
          'hide_empty' => 0
        ) );
        if( $sub_cats ){
          foreach( $sub_cats as $cat ){

    // Данные в объекте $cat

           $cat->term_id;
           $cat->name;
           $cat->slug;
           $cat->term_group;
           $cat->term_taxonomy_id;
           $cat->taxonomy;
           $cat->description;
           $cat->parent;
           $cat->count;
           $cat->object_id;
           $cat->cat_ID;
           $cat->category_count;
           $cat->category_description;
           $cat->cat_name;
           $cat->category_nicename;
           $cat->category_parent;



    # получаем записи из рубрики
           $myposts = get_posts( array(
            'numberposts' => -1,
            'category'    => $cat->cat_ID,
            'orderby'     => 'post_date',
            'order'       => 'DESC',
          ) );
    # выводим записи
           global $post;
           foreach($myposts as $post){
            setup_postdata($post);



            echo '<div class="news-item"><div class="contain"><div class="blog-item-w">';
            echo '<div class="news-r blog-r"><div class="join-txt-3 news-txt-3">';  
            echo $cat->name;
            echo '</div><div class="join-txt-2">';
            echo the_title();
            echo '</div><div class="news-desc">';
            echo get_field('short_description');
            echo '</div> <div class="news-butt-wrap">';
            echo '<a href="';
            echo the_permalink();
            echo '" class="butt-o">Read more</a></div></div><!--news-r-->';
            echo '<div class="news-l">';
            echo '<img src="';
            echo the_post_thumbnail_url('news-img');
            echo '" alt="news-img"></div>';
            echo '</div></div></div>';



          }
        }
 the_posts_pagination();
  wp_reset_postdata(); // сбрасываем глобальную переменную пост
}
?>

</div><!--news-items-->
</div>
</div><!--blog-cat-->

<?php get_footer(); ?>






