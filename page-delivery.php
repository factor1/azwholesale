<?php
/* Template Name: Delivery Page */
?>
<?php get_header(); ?>

 

	<div class="arizona_section inner-section-1 text-center delivery-sec-1">				
		<div class="col-md-12"  >
			<img src="<?php echo the_field('delivery_banner_image'); ?>">
			<div class="section-align-middle"  > 
				<h1><?php echo the_field('delivery_page_title'); ?></h1>
			</div>
		</div>			
	</div>

			
	<div class="arizona_section delivery-sec-2 padding-top-100 padding-bottom-100">				
		<div class="container">
			<div class="text-center delivery-sec-2-top">
				<?php echo the_field('delivery_page_sec2_text'); ?>
				<?php 
				$link = get_field('delivery_page_sec2_btn');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="arizon-button button-brown button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>	
			</div>
			<div class="delivery-sec-2-bot">		 
				<h2><?php echo the_field('delivery_page_sec2_heading'); ?></h2>
				<?php echo the_field('delivery_page_sec2_subheading'); ?>
			</div>
		</div>			
	</div>	

	<div class="arizona_section delivery-sec-3">				
		<div class="col-md-12"  >
			<img src="<?php echo the_field('delivery_sec3_img'); ?>"> 
		</div>			
	</div>	

	<div class="arizona_section delivery-sec-4 padding-top-100 padding-bottom-100">				
		<div class="container"> 			 	 
			<h2><?php echo the_field('delivery_page_sec4_heading'); ?></h2>
			<?php echo the_field('delivery_page_sec4_subheading'); ?>
			<?php $link = get_field('delivery_page_sec4_btn1');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="arizon-button button button1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
			<?php 
			$link = get_field('delivery_page_sec4_btn2');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="arizon-button button button2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
			<?php 
			$link = get_field('delivery_page_sec4_btn3');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="arizon-button button button3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>			 
		</div>			
	</div>		 
				

<?php get_footer(); ?>