<?php get_header(); ?>
<main class="main">
  <?php $post = get_post(13); ?>
  <div class="banner">
    <div class="banner__inner">
      <div class="contain">
        <div class="banner__row">
          <div class="banner__content">
            <div class="banner__uptitle">
              <?php echo get_field('chess_business_consulting'); ?>
            </div>
            <div class="banner__title">
              <?php echo get_field('we_put_the_up_and_start_up'); ?>
            </div>                
            <div class="banner__text">
              <?php echo get_field('buisness_strategy'); ?>
            </div>
            <div class="banner__btns">
              <?php echo get_field('btns'); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="<? bloginfo('template_url') ?>/img/banner.jpg" class="banner__img" />
    <?php wp_reset_postdata(); ?>
  </div><!--banner-->
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
  </div><!--strtup-->

  <div class="apply">
    <?php $post = get_post(13); ?>
    <div class="contain">
      <div class="apply__heading heading-2">
        <?php echo get_field('how_to_apply'); ?>        
      </div>
      <div class="apply__items">
        <div class="apply__it">
          <div class="apply__content">
            <div class="apply__img-w"><img src="<?php echo get_field('apply_img_1'); ?>" class="apply__img" /></div>
            <div class="apply__title">
              <?php echo get_field('apply_title_1'); ?>
            </div>
            <div class="apply__text">
              <?php echo get_field('apply_text_1'); ?>
            </div>
            <?php echo get_field('apply_btn_1'); ?>
          </div>
        </div>
        <div class="apply__it">
          <div class="apply__content">
           <div class="apply__img-w"><img src="<?php echo get_field('apply_img_2'); ?>" class="apply__img" /></div>
           <div class="apply__title">
            <?php echo get_field('apply_title_2'); ?>
          </div>
          <div class="apply__text">
            <?php echo get_field('apply_text_2'); ?>
          </div>
        </div>
      </div>
      <div class="apply__it">
        <div class="apply__content">
         <div class="apply__img-w"><img src="<?php echo get_field('apply_img_3'); ?>" class="apply__img" /></div>
         <div class="apply__title">
          <?php echo get_field('apply_title_3'); ?>
        </div>
        <div class="apply__text">
          <?php echo get_field('apply_text_3'); ?>
        </div>
        <div class="apply__info">
          <div class="apply__count"><?php echo get_field('apply_text_4'); ?>            
        </div>
        <div class="apply__mini-text">
          <?php echo get_field('apply_text_5'); ?>                
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--apply-->

<div class="whychoose-advantages">
  <div class="whychoose">
    <div class="contain">
      <div class="whychoose__row">
        <div class="whychoose__l">
          <div class="whychoose__tit">            
            <?php echo get_field('why_choose_us'); ?>
          </div>
          <div class="whychoose__txt-1">
            <?php echo get_field('as_expert'); ?>            
          </div>
          <div class="whychoose__txt-2">
            <?php echo get_field('who_provides_advice'); ?>            
          </div>
        </div>
        <div class="whychoose__r">
          <div class="whychoose__row">
            <div class="whychoose__item">
              <div class="whychoose__nums">
                <div class="whychoose__num">
                  <?php echo get_field('whychoose_num_1'); ?>                  
                </div>
                <div class="whychoose__num-txt">
                  <?php echo get_field('whychoose_title_1'); ?>
                </div>
              </div>
              <div class="whychoose__text">
                <?php echo get_field('whychoose_desc_1'); ?>
              </div>
            </div>
            <div class="whychoose__item">
              <div class="whychoose__nums">
                <div class="whychoose__num"><?php echo get_field('whychoose_num_2'); ?></div>
                <div class="whychoose__num-txt"><?php echo get_field('whychoose_title_2'); ?></div>
              </div>
              <div class="whychoose__text"><?php echo get_field('whychoose_desc_2'); ?></div>
              <div class="whychoose__text-2"><?php echo get_field('whychoose_desc_22'); ?></div>
            </div>
          </div>
          <div class="whychoose__item-big">
            <div class="whychoose__gold-text"><?php echo get_field('whychoose_num_3'); ?></div>
            <div class="whychoose__num-txt whychoose__num-txt-2"><?php echo get_field('whychoose_title_3'); ?></div>
            <div class="whychoose__text">
              <?php echo get_field('whychoose_desc_3'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="advantages">
    <div class="contain">
      <div class="advantages__row">
        <div class="advantages__l">
          <?php echo get_field('advantages-img'); ?>
          <img src="<? bloginfo('template_url') ?>/img/man.svg" class="advantages__img" />
        </div>
        <div class="advantages__r">
          <div class="advantages__heading heading-2">
            <?php echo get_field('our_advantages'); ?>          
          </div>
          <div class="advantages__info">
            <div class="advantages__info-l">
              <div class="advantages__subtit">
                <?php echo get_field('also_known'); ?>
                also known as expert, specialist, see variations <br />
                of meaning below)
              </div>
              <div class="advantages__text">
                purposeful activities in an area of specialization
                <?php echo get_field('purposeful_activities'); ?>
              </div>
            </div>
            <?php echo get_field('advantages-btn'); ?>
            <a href="#" class="advantages__btn btn-o">Consultation</a>
          </div>

          <div class="advantages__its">
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_1'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_1'); ?>
                </div>
              </div>
            </div>
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_2'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_2'); ?>
                </div>
              </div>
            </div>
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_3'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_3'); ?>
                </div>
              </div>
            </div>
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_4'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_4'); ?>
                </div>
              </div>
            </div>
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_5'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_5'); ?>
                </div>
              </div>
            </div>
            <div class="advantages__col">
              <div class="advantages__it">
                <div class="advantages__it-img">
                  <img src="<?php echo get_field('advantages_img_6'); ?>">
                </div>
                <div class="advantages__it-tetxt">
                  <?php echo get_field('advantages_text_6'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="advanform">
            <div class="advanform__title">
              <?php echo get_field('call_me_i_want_to_know'); ?>              
            </div>
            <div class="advanform__txt">
              <?php echo get_field('call_back_within_10_minutes'); ?>              
            </div>
            <div class="advanform__form">
              <?php echo do_shortcode('[wpforms id="46" title="false" description="false"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="pro-video-clients-pubs">
  <div class="pro">
    <div class="contain">
      <div class="pro__inn">
        <div class="pro__l">
          <div class="problock__txt-1">
            <?php echo get_field('professional_team'); ?>            
          </div>
          <div class="problock__txt-2">
            <?php echo get_field('ntrepreneurs_often'); ?>              
          </div>
          <div class="problock__txt-3">
            <?php echo get_field('provides_advice'); ?>            
          </div>
        </div>
        <div class="pro__r">
          <div class="pro__txt-1">
            <?php echo get_field('pro'); ?>            
          </div>
          <div class="pro__txt-2">
            <?php echo get_field('more_than_200'); ?>            
          </div>
          <div class="pro__txts">
            <div class="pro__txt-3">
              <?php echo get_field('esign_thinking'); ?>              
            </div>
            <div class="pro__txt-4">
              <?php echo get_field('do_not_remove'); ?>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="video">
    <div class="contain">
      <div class="video__inn">
        <div class="video__l">
          <div class="video__txt-1">
            <?php echo get_field('nir_muller'); ?>            
          </div>
          <div class="video__txt-2">
            <?php echo get_field('ba_and_ma_in_economics'); ?>            
          </div>
          <div class="video__txt-3">
            <?php echo get_field('design_thinking'); ?>            
          </div>
          <?php echo get_field('consultation_btn'); ?>          
        </div>
        

        
  


        
          <div class="video js-video video__r" data-youtube="sfkmJ0O_-o0">

          <img src="<?php echo get_field('video_img'); ?>" class="video__img" />
          <div class="video__cont">
            <div class="video__txts">
              <div class="video__r-txt-1">
                <?php echo get_field('video_text_1'); ?>                
              </div>
              <div class="video__r-txt-2">
                <?php echo get_field('video_text_2'); ?>                
              </div>
            </div>
            <a href="#" id="video__play" class="video__play video__button"></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="clients">
    <div class="contain">
      <div class="clients__heading heading-2">
        <?php echo get_field('сlients_more'); ?>        
      </div>
      <div class="clients__row">
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_1'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_1'); ?>              
            </div>
          </div>
        </div>
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_2'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_2'); ?>              
            </div>
          </div>
        </div>
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_3'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_3'); ?>              
            </div>
          </div>
        </div>
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_4'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_4'); ?>              
            </div>
          </div>
        </div>
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_5'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_5'); ?>              
            </div>
          </div>
        </div>
        <div class="clients__col">
          <div class="clients__it">
            <div class="clients__img-w"><img src="<?php echo get_field('clients_img_6'); ?>" /></div>
            <div class="clients__txt">
              <?php echo get_field('clients_text_6'); ?>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pubs">          
    <div class="contain">
      <div class="pubs__heading heading-2">
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
</div>
</main>
<?php get_footer(); ?>