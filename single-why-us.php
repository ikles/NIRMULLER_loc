<?
/*
Template Name: Template for Single Why us
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
<div class="why-1">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
      <h1 class="like-h1"><?php echo get_field('why_einvestment_is_the_superior_choice'); ?></h1>
      <div class="why-1-texts">
        <div class="why-1-txt-1">
          <?php echo get_field('benefits_of_entrusting_your_assets_to_einvestment_include:'); ?>
        </div>
        <div class="why-1-ul">
          <?php echo get_field('why_list'); ?>      
        </div>
      </div>
    </div>
  </div>
  <div class="why-2">
    <div class="contain">
      <div class="runing-w">
        <h2 class="like-h2-w"><?php echo get_field('runinning_title'); ?></h2>
        <div class="runing-items">
          <?php

          $pa = get_field('runing_items');

          $it_1 = $pa['runing_item_1'];
          $it_2 = $pa['runing_item_2'];
          $it_3 = $pa['runing_item_3'];
          $it_4 = $pa['runing_item_4'];
          $it_5 = $pa['runing_item_5'];
          $it_6 = $pa['runing_item_6'];
          ?>
          <div class="runing-item">
            <div class="runing-txt-1">
              <?php echo $it_1['runing_text_1'] ?>            
            </div>
            <div class="runing-txt-2">
              <?php echo $it_1['runing_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $it_1['runing_text_3'] ?>
            </div>
            <div class="runing-butt-wrap"></div>
          </div>

          <div class="runing-item">
            <div class="runing-txt-1">
              <?php echo $it_2['runing_text_1'] ?>            
            </div>
            <div class="runing-txt-2">
              <?php echo $it_2['runing_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $it_2['runing_text_3'] ?>
            </div>
            <div class="runing-butt-wrap"></div>
          </div>

          <div class="runing-item">
            <div class="runing-txt-1">
              <?php echo $it_3['runing_text_1'] ?>            
            </div>
            <div class="runing-txt-2">
              <?php echo $it_3['runing_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $it_3['runing_text_3'] ?>
            </div>
            <div class="runing-butt-wrap"></div>
          </div>

          <div class="runing-item">
            <div class="runing-txt-1">
              <?php echo $it_4['runing_text_1'] ?>            
            </div>
            <div class="runing-txt-2">
              <?php echo $it_4['runing_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $it_4['runing_text_3'] ?>
            </div>
            <div class="runing-butt-wrap"></div>
          </div>

          <div class="runing-item">
            <div class="runing-txt-1">
              <?php echo $it_5['runing_text_1'] ?>            
            </div>
            <div class="runing-txt-2">
              <?php echo $it_5['runing_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $it_5['runing_text_3'] ?>
            </div>
            <div class="runing-butt-wrap"></div>
          </div>

          <div class="runing-item runing-item-last">
            <div class="runing-txt-1">
              <?php echo $it_6['runing_text_1'] ?>            
            </div>            
            <div class="runing-butt-wrap">
              <a href="<?php echo $it_6['running_button_link'] ?>" class="butt"><?php echo $it_6['runing_button_text'] ?></a>
            </div>
          </div>

        </div>
      </div>
      <div class="accel-w">
        <h2 class="like-h2-w"><?php echo get_field('in_accelerated_development'); ?></h2>
        <div class="accel-items">
          <?php
          $acc_g = get_field('accel_group');
          $acc_it_1 = $acc_g['accel_item_1'];
          $acc_it_2 = $acc_g['accel_item_2'];
          $acc_it_3 = $acc_g['accel_item_3'];
          $acc_it_4 = $acc_g['accel_item_4'];                    
          ?>
          <div class="accel-item">
            <div class="runing-txt-1">          
              <?php echo $acc_it_1['accel_text_1'] ?>              
            </div>
            <div class="runing-txt-2">
              <?php echo $acc_it_1['accel_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $acc_it_1['accel_text_3'] ?>
            </div>
          </div><!--accel-item-->
          <div class="accel-item">
            <div class="runing-txt-1">          
              <?php echo $acc_it_2['accel_text_1'] ?>              
            </div>
            <div class="runing-txt-2">
              <?php echo $acc_it_2['accel_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $acc_it_2['accel_text_3'] ?>
            </div>
          </div><!--accel-item-->
          <div class="accel-item">
            <div class="runing-txt-1">          
              <?php echo $acc_it_3['accel_text_1'] ?>              
            </div>
            <div class="runing-txt-2">
              <?php echo $acc_it_3['accel_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $acc_it_3['accel_text_3'] ?>
            </div>
          </div><!--accel-item-->
          <div class="accel-item">
            <div class="runing-txt-1">          
              <?php echo $acc_it_4['accel_text_1'] ?>              
            </div>
            <div class="runing-txt-2">
              <?php echo $acc_it_4['accel_text_2'] ?>
            </div>
            <div class="runing-txt-3">
              <?php echo $acc_it_4['accel_text_3'] ?>
            </div>
          </div><!--accel-item-->

        </div>
        <div class="accel-bot-txt">
          <?php echo get_field('special_rates_for_all'); ?>          
        </div>
      </div>
    </div>
  </div>
  <div class="advs-list">
    <div class="contain">
      <?php echo get_field('why_list_2'); ?>
    </div>
  </div>
  <div class="club">
    <div class="contain">
      <div class="club-w">
        <div class="club-l">
          <div class="club-title">
            <?php echo get_field('einvestment_club'); ?>
          </div>
          <?php echo get_field('einvestment_club_text'); ?>          
        </div>
        <div class="club-r">
          <?php
          $mem_g =  get_field('membership_group');
          $mem_it_1 = $mem_g['membership_item_1'];
          $mem_it_2 = $mem_g['membership_item_2'];
          ?>
          <div class="club-item">
            <div class="club-img-w">
              <img src="<?php echo $mem_it_1['membership_img_new'] ?>">
            </div>
            <div class="club-txt-1">
              <?php echo $mem_it_1['membership_text_1'] ?>
            </div>
            <div class="club-txt-2">
              <?php echo $mem_it_1['membership_text_2'] ?>
            </div>
            <div class="club-txt-3">
              <?php echo $mem_it_1['membership_text_3'] ?>
            </div>
            <div class="club-txt-4-butt-wrap">
              <div class="club-txt-4">
                <a href="<?php echo $mem_it_1['membership_link'] ?>"><?php echo $mem_it_1['membership_link_text'] ?></a>
              </div>
              <div class="club-butt-wrap">
                <a class="butt" href="<?php echo $mem_it_1['membership_button_link'] ?>"><?php echo $mem_it_1['membership_button_text'] ?></a>
              </div>
            </div><!--club-txt-4-butt-wrap-->
          </div>

          <div class="club-item">
            <div class="club-img-w">
              <img src="<?php echo $mem_it_2['membership_img'] ?>">
            </div>
            <div class="club-txt-1">
              <?php echo $mem_it_2['membership_text_1'] ?>
            </div>
            <div class="club-txt-2">
              <?php echo $mem_it_2['membership_text_2'] ?>
            </div>
            <div class="club-txt-3">
              <?php echo $mem_it_2['membership_text_3'] ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="apply">
    <div class="contain">
      <div class="apply-list">
        <?php echo get_field('why_list_3'); ?>
      </div>
      <div class="apply-w">
        <div class="apply-title">Apply for an account now and start investing.</div>
        <div class="apply-butt-w">
          <a href="<?php echo get_field('apply_link'); ?>" class="butt"><?php echo get_field('apply_link_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>