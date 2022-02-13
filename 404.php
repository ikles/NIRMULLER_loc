<? get_header(); ?>









<div class="pagebanner__w">
  <div class="pagebanner">
    <div class="contain">
      <div class="pagebanner__inn">
        <div class="bread__w">
          <a href="/">Main</a> <i><span class="bread-arr"></span></i> 
          Error 404
          <span class="bread-search">
          </span>
        </div>
        <div class="pagebanner__tit">
          Error 404
        </div>        
      </div>
    </div>
  </div>
</div>





<div class="page">
  <div class="contain">
    <div class="cols">
      <div class="cols__l">

        <div class="search__heading heading-2">
          Error 404
        </div>
        <p class="search__desc">This page is under construction. Go to <a href="/">main page</a></p>
      </div>



      <div class="cols__r">
        <div class="search">        
          <div class="search__lbl">
            <?php get_search_form(); ?>
            <div class="search__lbl-txt">search all over the site</div>
          </div>
        </div>

        <div class="consult">
          <?php $post = get_post(199); ?>
          <div class="consult__img-w">
            <img src="<? bloginfo('template_url') ?>/img/banner-icon.png">
          </div>
          <div class="consult__txt-1">
            <?php echo get_field('startup'); ?>          
          </div>
          <div class="consult__txt-2">
            <?php echo get_field('also_known_as'); ?>          
          </div>
          <div class="consult__txt-3">
            <?php echo get_field('who_provides'); ?>          
          </div>
          <?php echo get_field('consult_btn'); ?>        
          <?php wp_reset_query(); ?>
        </div>

        <div class="mostpop">
          <div class="mostpop__tit">Most Popular</div>
          <div class="mostpop__list-w">
            <ul class="mostpop__list">

              <?
              $args = array( 'posts_per_page' => 100 );
              $query = new WP_Query( $args );
              while ( $query->have_posts() ) {
                $query->the_post();


                echo '<li class="mostpop__item">';
                $category = get_the_category(); 
                $n_ID = $category[0]->cat_ID;
        //p_a($category);        
                echo '<a class="mostpop__cat" href="';
                echo get_category_link($n_ID);
                echo '">';
                echo $category[0]->name;
                echo '</a>';

                echo '<a href="';
                echo the_permalink();
                echo '" class="mostpop__it-title">';
                echo the_title();            
                echo '</a></li>';
              }
              wp_reset_postdata();
              ?>
            </ul>
          </div><a href="#" class="more__btn">Show more<i class="more__btn-icon"></i></a>
        </div>
      </div><!--cols__r-->
    </div><!--cols-->

  </div>
</div>
<? get_footer(); ?>  
