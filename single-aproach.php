<?
/*
Template Name: Template for Single Our Approach
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

<div class="team-1">
  <div class="contain">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="like-h1"><?php the_title() ?></h1>      
    </div><!--contain-->
  </div><!--how-1-->
  <div class="team-2">
    <div class="contain">
      <div class="team-title"><?php echo get_field('einvestment_management_team'); ?></div>
      <div class="team-desc-de sc">
        <?php echo get_field('desc'); ?>
      </div><!--team-desc-->
    </div><!--contain-->
  </div><!--team-2-->

  <div class="appro-3">
    <div class="contain">
      <div class="like-h3 like-h3-inv appro-title"><?php echo get_field('our_investment_products_are_title'); ?></div>
      <div class="appro-items">
       <?php
       $o_inv_pr_1 = get_field('our_investment_products_icon_1');
       $o_inv_pr_2 = get_field('our_investment_products_icon_2');
       $o_inv_pr_3 = get_field('our_investment_products_icon_3');
       $o_inv_pr_4 = get_field('our_investment_products_icon_4');
       ?>

       <?php if( $o_inv_pr_1 != '' ): ?>
         <div class="appro-item">
          <?php if( $o_inv_pr_1['icon'] != '' ): ?>
            <div class="appro-item-img-w">
              <img src="<?php echo $o_inv_pr_1['icon'] ?>" alt="icon">
            </div><!--appro-item-img-w-->
          <?php endif; ?>
          <div class="appro-item-desc">
            <?php echo $o_inv_pr_1['desc']; ?>
          </div>
        </div><!--appro-item-->
      <?php endif; ?>

      <?php if( $o_inv_pr_2 != '' ): ?>
       <div class="appro-item">
        <?php if( $o_inv_pr_2['icon'] != '' ): ?>
          <div class="appro-item-img-w">
            <img src="<?php echo $o_inv_pr_2['icon'] ?>" alt="icon">
          </div><!--appro-item-img-w-->
        <?php endif; ?>
        <div class="appro-item-desc">
          <?php echo $o_inv_pr_2['desc']; ?>
        </div>
      </div><!--appro-item-->
    <?php endif; ?>

    <?php if( $o_inv_pr_3 != '' ): ?>
     <div class="appro-item">
      <?php if( $o_inv_pr_3['icon'] != '' ): ?>
        <div class="appro-item-img-w">
          <img src="<?php echo $o_inv_pr_3['icon'] ?>" alt="icon">
        </div><!--appro-item-img-w-->
      <?php endif; ?>
      <div class="appro-item-desc">
        <?php echo $o_inv_pr_3['desc']; ?>
      </div>
    </div><!--appro-item-->
  <?php endif; ?>

  <?php if( $o_inv_pr_4 != '' ): ?>
   <div class="appro-item">
    <?php if( $o_inv_pr_4['icon'] != '' ): ?>
      <div class="appro-item-img-w">
        <img src="<?php echo $o_inv_pr_4['icon'] ?>" alt="icon">
      </div><!--appro-item-img-w-->
    <?php endif; ?>
    <div class="appro-item-desc">
      <?php echo $o_inv_pr_4['desc']; ?>
    </div>
  </div><!--appro-item-->
<?php endif; ?>

</div><!--appro-items-->
</div><!--contain-->
</div><!--appro-3-->

<?php endwhile; ?>
<?php endif; ?>


<?php
$post = get_post(711);
?>
<?php if( get_field('show_block_3') == 'yes' ): ?>
  <div class="join join-2 join-3">
    <div class="contain">
      <div class="join-w">
        <div class="join-l">
          <img
          src="<? bloginfo('template_url') ?>/img/join-phone@2x.png"
          alt="join-phone"
          srcset="<? bloginfo('template_url') ?>/img/join-phone.png 1x,
          <? bloginfo('template_url') ?>/img/join-phone@2x.png 2x"
          >
        </div>
        <div class="join-r">

          <div class="join-txt-1"><?php echo get_field('text_1'); ?></div>
          <div class="join-txt-2"><?php echo get_field('text_2'); ?></div>
          <?php if( get_field('link_text') != '' ): ?>
            <div class="st-inw-butt-w">
              <a href="<?php echo get_field('link'); ?>" class="butt"><?php echo get_field('link_text'); ?></a>
            </div>
          <?php endif; ?>
        </div><!--join-r-->
      </div>
      
    </div>
  </div><!--join-2-->
<?php endif; ?>



<?php get_footer(); ?>