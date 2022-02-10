  <?php
  /*
  Template Name: Single Contacts
  Template Post Type: page
  */
  ?>
  <?php get_header(); ?>
  <div class="bread">
    <div class="contain">
      <div class="bread-w">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
  </div><!--bread-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="cont-1">
      <div class="contain">
        <div class="cont-1-w">        
          <div class="cont-1-l">

            <div class="cont-title"><?php the_title() ?></div>
            <div class="cont-txt-1">
              <?php echo get_field('text_1'); ?>            
            </div>
            <div class="cont-txt-2">
              <?php echo get_field('text_2'); ?>
            </div>

          </div>
          <div class="cont-1-r">

            <div class="cont-form-w">
              <div class="cont-form-title">
                Keep in touch with us
              </div>
              <?php echo do_shortcode('[contact-form-7 id="791" title="cont-form"]'); ?>
            </div>

          </div>

        </div>
      </div> 
    </div>

    <div class="cont-conts">
      <div class="contain">
        <div class="cont-conts-w">
          <div class="cont-l-t hide-768 show-570">        
            <?php echo get_field('easy_ways_to_communicate'); ?>
          </div>
          <div class="cont-l-t show-768 hide-570">        
            Easy ways to communicate
          </div>        
          <div class="cont-items">
            <div class="cont-item">            
              <a class="cont-item-link" href="skype:<?php echo get_field('skype_link'); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/skype.png" alt="icon">
                <span><?php echo get_field('skype_id_here'); ?></span>
              </a>
            </div><!--cont-item-->

            <div class="cont-item">           
              <a class="cont-item-link" href="<?php echo get_field('telegram_link'); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/telegram.png" alt="icon">        
                <span><?php echo get_field('telegram_phone'); ?></span>
              </a>
            </div><!--cont-item-->

            <div class="cont-item">            
              <a class="cont-item-link" href="<?php echo get_field('сhat_us_link'); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/Live_Chat.png" alt="icon">
                <span><?php echo get_field('сhat_us_now'); ?></span>
              </a>
            </div><!--cont-item-->
          </div><!--cont-items-->
        </div><!--cont-conts-w-->
      </div><!--contain-->
    </div><!--cont-conts-->
    <div class="cont-map">
      <div class="contain">
        <div class="cont-map-w cont-map-w-1">
          <div class="cont-map-w-l hide-570">
            <div class="cont-map-txt-1">            
              <?php echo get_field('cont_map_txt_1'); ?>
            </div>
            <?php echo get_field('cont_map_txt_2'); ?>          
          </div>
          <div class="cont-map-w-r">
            <div class="map-img-1-w">
              <img src="<?php echo get_field('img_1'); ?>" alt="image">
            </div>
            <div class="cont-map-w-l show-570">
              <div class="cont-map-txt-1">            
                <?php echo get_field('cont_map_txt_1'); ?>
              </div>
              <?php echo get_field('cont_map_txt_2'); ?>          
            </div>
            <div class="map-img-2-w">
              <img src="<?php echo get_field('img_2'); ?>" alt="image">
            </div>
          </div>
        </div><!--cont-map-w-->
        <div class="cont-map-w cont-map-w-2">
          <div class="cont-map-w-r">
            <div class="map-img-1-w">
              <img src="<?php echo get_field('img_3'); ?>" alt="image">
            </div>
            <div class="cont-map-w-l show-570">
              <div class="cont-map-txt-1">            
                <?php echo get_field('cont_map_txt_3'); ?>
              </div>
              <?php echo get_field('cont_map_txt_4'); ?>          
            </div>
            <div class="map-img-2-w">
              <img src="<?php echo get_field('img_4'); ?>" alt="image">
            </div>
          </div>
          <div class="cont-map-w-l hide-570">
            <div class="cont-map-txt-1">            
              <?php echo get_field('cont_map_txt_3'); ?>
            </div>
            <?php echo get_field('cont_map_txt_4'); ?>          
          </div>
        </div><!--cont-map-w-->
      </div>
    </div>












  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>


















