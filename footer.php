<?php $post = get_post(13); ?>
<footer class="footer">
	<div class="contain">
		<div class="footer__row">
			<div class="footer__col-1">
				<div class="footer__mnu-block">
					<div class="footer__mnu-title">
						<?php echo get_field('services'); ?>						
					</div>
					<ul class="footer__mnu">
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Consulting Servises</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Prodact Shelf Placement</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Manufacturing in China</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Feasibility Studies </a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Business Planning Services</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Business Strategy &amp; Growth </a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Digital Marketing Strategy </a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Fundraising</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__col-2">
				<div class="footer__mnu-block">
					<div class="footer__mnu-title">
						<?php echo get_field('information'); ?>						
					</div>
					<ul class="footer__mnu">
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Service</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">About company </a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Team</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Vacancy</a></li>
						<li class="footer__mnu-li"><a href="#" class="footer__mnu-link">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__col-3">
				<div class="footer__mnu-block">
					<div class="footer__mnu-title">
						<?php echo get_field('contact_us'); ?>						
					</div>
					<div class="footer__text">
						<?php echo get_field('our_manager_will_advise'); ?>						
					</div>
					<a href="<?php echo get_field('footer_phone'); ?>" class="footer__phone">
						<?php echo get_field('footer_phone'); ?>						
					</a>
				</div>
			</div>
			<div class="footer__col-4">
				<a href="#" class="footer__logo"><img src="<? bloginfo('template_url') ?>/img/f-logo.svg" /></a>
				<div class="footer__text-2">
					<?php echo get_field('this_site_is_an_independentinformation_portal'); ?>					
				</div>
				<div class="footer__text-3">
					<?php echo get_field('buisness_strategy'); ?>					
				</div>
				<div class="footer__text-3">
					<?php echo get_field('social_media_marketing'); ?>					
				</div>
				<div class="social">
					<a href="<?php echo get_field('social_link_1'); ?>" class="social__it"><img src="<?php echo get_field('social_img_1'); ?>" /></a>
					<a href="<?php echo get_field('social_link_2'); ?>" class="social__it"><img src="<?php echo get_field('social_img_2'); ?>" /></a>
					<a href="<?php echo get_field('social_link_3'); ?>" class="social__it"><img src="<?php echo get_field('social_img_3'); ?>" /></a>
				</div>
			</div>

			<div class="show-991 footer__pda-texts">
				<div class="footer__text-2">
					<?php echo get_field('this_site_is_an_independentinformation_portal'); ?>					
				</div>
				<div class="footer__text-3">
					<?php echo get_field('buisness_strategy'); ?>					
				</div>
				<div class="footer__text-3">
					<?php echo get_field('social_media_marketing'); ?>					
				</div>
			</div>

		</div>
	</div>
</footer>
<a href="#wrapper" class="to-top" data-scroll="wrapper"></a>


<div class="modal-overlay modal-overlay_1">        
	<div class="modal-form__layout"></div>
	<div class="modal-form__block">
		<span class="modal-close modal-close_1"></span>
		<div class="modal-form__inner">						
			<div class="modal-form__form-w">
				<div class="modal-form__txt-1">Back call</div>
				<div class="modal-form__txt-2">provides advice and further purposeful activities
				in an area of specialization</div>	

				<?php echo do_shortcode('[wpforms id="197" title="false" description="false"]'); ?>

				<div class="modal-form__info">as soon as possible we will call you back <br>
				and answer all your questions</div>
			</div>

		</div>
	</div>
</div><!--modal-overlay-->


</div>
<!--wrapper-->

<script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script>      
<script src="<? bloginfo('template_url') ?>/js/slick.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.fancybox.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
<? wp_footer(); ?>
</body>
</html>




