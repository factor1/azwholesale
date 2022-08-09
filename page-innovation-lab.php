<?php
/* Template Name: Innovation Lab Page */
?>
<?php get_header(); ?>

	<div class="arizona_section inner-section-1 text-center innovation-sec-1">				
		<div class="col-md-12"  >
			<img src="<?php echo the_field('innovation_banner_image'); ?>">
			<div class="section-align-middle"  >
				<h5><?php echo the_field('innovation_page_subtitle'); ?></h5>
				<h1><?php echo the_field('innovation_page_title'); ?></h1>
			</div>
		</div>			
	</div>

	<div class="arizona_section innovation-sec-2 padding-top-100 padding-bottom-100">				
		<div class="container">
			<div class="text-center col-md-12 innovation-sec-2-top">
				<div class="col" style="background-image: url(<?php echo the_field('innovation_sec2_img1'); ?>)"></div> 
				<div class="col" style="background-image: url(<?php echo the_field('innovation_sec2_img2'); ?>)"></div> 
				<div class="col" style="background-image: url(<?php echo the_field('innovation_sec2_img3'); ?>)"></div> 
				<div class="col" style="background-image: url(<?php echo the_field('innovation_sec2_img4'); ?>)"></div> 
				<div class="col" style="background-image: url(<?php echo the_field('innovation_sec2_img5'); ?>)"></div> 
			</div>
			<div class="innovation-sec-2-bot">		 
				<?php echo the_field('innovation_sec2_text'); ?>
			</div>
		</div>			
	</div>	
			
	<div class="arizona_section padding-bottom-100 innovation-sec-3 text-center">				
		<div class="container"> 
			<h2><?php echo the_field('innovation_sec3_heading'); ?></h2>
			<?php 
			$link = get_field('innovation_sec3_btn');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="arizon-button button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>	 		 
		</div>			
	</div>	


	<div class="arizona_section innovation-sec-4 padding-bottom-100">				
		<div class="container">
			<div class="col-md-12 innovation-sec-4-left">
				<h2><?php echo the_field('innovation_sec4_heading'); ?></h2>
				<?php echo do_shortcode('[wpforms id="340" title="false"]'); ?>
			</div>
			<div class="innovation-sec-4-right">		 
				<img src="<?php echo the_field('innovation_sec4_image'); ?>">
			</div>
		</div>			
	</div>	

	  
				

<?php get_footer(); ?>