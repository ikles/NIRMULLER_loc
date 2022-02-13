<?php get_header(); ?>

<div class="pagebanner__w">
  <div class="pagebanner">
    <div class="contain">
      <div class="pagebanner__inn">
        <div class="bread__w">
          <?php the_breadcrumb(); ?>
        </div>
        <div class="pagebanner__tit"><?php the_title(); ?></div>
        <div class="posted">Posted on <a href="#" class="posted__date"><?php the_date('d M Y'); ?></a></div>
      </div>
    </div>
  </div>
</div>
<div class="page">
  <div class="contain">
    <div class="page__inn">
      <div class="cols">
        <div class="cols__l">        
          <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
              <div class="author__social-w">
                <div class="author">
                  <div class="author__img-w">
                    <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
                  </div>
                  <div class="author__content">
                    <div class="author__name">
                      <?php $author = get_the_author(); echo $author; ?>
                    </div>
                    <div class="author__author">author
                    </div>
                  </div>
                </div><!--author-->
                <div class="author__socials">
                  <?php if( get_field('author_social_link_1') ): ?>
                    <a class="author__social" href="<?php echo get_field('author_social_link_1'); ?>">
                      <img src="<?php echo get_field('author_social_img_1'); ?>" />
                    </a>
                  <?php endif; ?>
                  <?php if( get_field('author_social_link_2') ): ?>
                    <a class="author__social" href="<?php echo get_field('author_social_link_2'); ?>">
                      <img src="<?php echo get_field('author_social_img_2'); ?>" />
                    </a>
                  <?php endif; ?>
                  <?php if( get_field('author_social_link_3') ): ?>
                    <a class="author__social" href="<?php echo get_field('author_social_link_3'); ?>">
                      <img src="<?php echo get_field('author_social_img_3'); ?>" />
                    </a>
                  <?php endif; ?>
                  <?php if( get_field('author_social_link_4') ): ?>
                    <a class="author__social" href="<?php echo get_field('author_social_link_4'); ?>">
                      <img src="<?php echo get_field('author_social_img_4'); ?>" />
                    </a>
                  <?php endif; ?>
                  <?php if( get_field('author_social_link_5') ): ?>
                    <a class="author__social" href="<?php echo get_field('author_social_link_5'); ?>">
                      <img src="<?php echo get_field('author_social_img_5'); ?>" />
                    </a>
                  <?php endif; ?>
                </div>
              </div>

            <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
        </div><!--content-->
      </div><!--cols__l-->
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
              $args = array( 'posts_per_page' => 10, 'category__not_in' => array(1), 'post__not_in' => [$post->ID] );
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
</div><!--page-->

<div class="startup__w">
  <div class="startup">
    <?php $post = get_post(29); ?>
    <div class="contain">
      <div class="startup__row">
        <div class="startup__left">
          <div class="startup__tiltle">
            <?php echo get_field('startup'); ?>
          </div>
          <div class="startup__subtiltle">
            <?php echo get_field('also_known'); ?>          
          </div>
          <div class="startup__text">
            <?php echo get_field('who_provides'); ?>          
          </div>
          <?php echo get_field('btn'); ?>          
        </div>
        <div class="startup__right">
          <div class="form">
            <div class="form__top">
              <div class="form__img-w">
                <img src="<? bloginfo('template_url') ?>/img/icon.svg" />
                <div class="form__slogan">StartUp</div>
              </div>
              <div class="form__content">
                <p class="form__p">                
                  <?php echo get_field('form_text_1'); ?>
                </p>
                <p class="form__p-2">
                  <?php echo get_field('form_text_2'); ?>                  
                </p>
                <div class="form__gray-txt">
                  <?php echo get_field('form_text_3'); ?>                
                </div>
                <?php echo get_field('form_text_list'); ?>    
              </div>
            </div>
            <div class="form__bot form__main">
              <?php echo do_shortcode('[wpforms id="44" title="false" description="false"]'); ?>
            </div>
          </div>
          <div class="most-popular">          
            <?php echo get_field('most_popular'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php wp_reset_query(); ?>
  </div>
</div><!--strtup-->


<div class="pubs">          
  <div class="contain">
    <div class="pubs__heading heading-2">
      We recommend reading
      <?php echo get_field('publications'); ?>      
    </div>
  </div>
  <div class="pubs__its-w">
    <div class="pubs__its">
      <?php if ( have_posts() ) : query_posts(array('posts_per_page' => 100, 'cat' => 3)); ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="pubs__col">
            <div class="pubs__it">
              <div class="pubs__it-img-w">
                <img src="<?php the_post_thumbnail_url('');?>" alt="">
              </div>
              <div class="pubs__txts">
                <?php
                $news_cat_link = get_category_link(3);                
                ?>
                <a href="<?php echo $news_cat_link; ?>" class="pubs__txt-1">
                  <?php echo get_the_category()[0]->name ?>
                </a>              
                <a href="<?php the_permalink(); ?>" class="pubs__txt-2">   <?php the_title(); ?>             
              </a>
              <div class="pubs__txt-3">
                <?php the_content(); ?>                
              </div>
            </div>
            <?php
            if (get_field('popular')) { ?>
              <a href="" class="pubs__label"><?php echo get_field('popular'); ?></a>
            <?php } ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
  </div><!--its-->
</div>
</div>



<?php get_footer(); ?>