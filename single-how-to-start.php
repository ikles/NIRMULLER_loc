<?
/*
Template Name: Template for Single how to start
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
<div class="how-1">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
      <h1 class="like-h1"><?php the_title() ?></h1>
      <div class="how-title-2"><?php echo get_field('digitized'); ?></div>            
    </div><!--contain-->
  </div><!--how-1-->
  <div class="how-2">
    <?php
    
    $st_gr_1 = get_field('digitized_simplified_step_1');
    $st_gr_2 = get_field('digitized_simplified_step_2');
    $st_gr_3 = get_field('digitized_simplified_step_3');
    $st_gr_4 = get_field('digitized_simplified_step_4');
    $st_gr_5 = get_field('digitized_simplified_step_5');

    ?>
    <div class="contain">
      <div class="how-items">

        <div class="how-item">
          <div class="how-head">
            <div class="how-step"><?php echo $st_gr_1['step'] ?></div>
            <div class="how-time"><img src="<? bloginfo('template_url') ?>/img/clock-Icon.svg" alt="clock-icon"><span><?php echo $st_gr_1['time'] ?></span></div>
          </div><!--how-head-->
          <div class="how-img-w">
            <img src="<?php echo $st_gr_1['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
          <div class="how-txt"><?php echo $st_gr_1['desc'] ?></div>
        </div><!--how-item-->

        <div class="how-item">
          <div class="how-head">
            <div class="how-step"><?php echo $st_gr_2['step'] ?></div>
            <div class="how-time"><img src="<? bloginfo('template_url') ?>/img/clock-Icon.svg" alt="clock-icon"><span><?php echo $st_gr_2['time'] ?></span></div>
          </div><!--how-head-->
          <div class="how-img-w">
            <img src="<?php echo $st_gr_2['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
          <div class="how-txt"><?php echo $st_gr_2['desc'] ?></div>
        </div><!--how-item-->

        <div class="how-item">
          <div class="how-head">
            <div class="how-step"><?php echo $st_gr_3['step'] ?></div>
            <div class="how-time"><img src="<? bloginfo('template_url') ?>/img/clock-Icon.svg" alt="clock-icon"><span><?php echo $st_gr_3['time'] ?></span></div>
          </div><!--how-head-->
          <div class="how-img-w">
            <img src="<?php echo $st_gr_3['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
          <div class="how-txt"><?php echo $st_gr_3['desc'] ?></div>
        </div><!--how-item-->

        <div class="how-item">
          <div class="how-head">
            <div class="how-step"><?php echo $st_gr_4['step'] ?></div>
            <div class="how-time"><img src="<? bloginfo('template_url') ?>/img/clock-Icon.svg" alt="clock-icon"><span><?php echo $st_gr_4['time'] ?></span></div>
          </div><!--how-head-->
          <div class="how-img-w">
            <img src="<?php echo $st_gr_4['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
          <div class="how-txt"><?php echo $st_gr_4['desc'] ?></div>
        </div><!--how-item-->

        <div class="how-item">
          <div class="how-head">
            <div class="how-step"><?php echo $st_gr_5['step'] ?></div>            
          </div><!--how-head-->
          <div class="how-img-w">
            <img src="<?php echo $st_gr_5['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
          <div class="how-txt"><?php echo $st_gr_5['desc'] ?></div>
        </div><!--how-item-->

      </div><!--how-items-->
    </div><!--contain-->
  </div><!--how-2-->
  <div class="how-3">
    <div class="contain">
      <div class="how-title-2"><?php echo get_field('you_may'); ?></div>
      <div class="how-items how-items-2">
        <?php
        $yu_st_1 = get_field('you_may_step_1');
        $yu_st_2 = get_field('you_may_step_2');
        $yu_st_3 = get_field('you_may_step_3');
        $yu_st_4 = get_field('you_may_step_4');
        ?>
        <div class="how-item">          
          <div class="how-txt how-txt-2"><?php echo $yu_st_1['desc'] ?></div>
          <div class="how-img-w">
            <img src="<?php echo $yu_st_1['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
        </div><!--how-item-->

        <div class="how-item">          
          <div class="how-txt how-txt-2"><?php echo $yu_st_2['desc'] ?></div>
          <div class="how-img-w">
            <img src="<?php echo $yu_st_2['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
        </div><!--how-item-->

        <div class="how-item">          
          <div class="how-txt how-txt-2"><?php echo $yu_st_3['desc'] ?></div>
          <div class="how-img-w">
            <img src="<?php echo $yu_st_3['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
        </div><!--how-item-->

        <div class="how-item">          
          <div class="how-txt how-txt-2"><?php echo $yu_st_4['desc'] ?></div>
          <div class="how-img-w">
            <img src="<?php echo $yu_st_4['image'] ?>" alt="Screenshot">
          </div><!--how-img-w-->
        </div><!--how-item-->

      </div><!--how-items-->
    </div><!--contain-->
  </div><!--how-3-->

<?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>