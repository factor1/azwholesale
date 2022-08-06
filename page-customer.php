<?php
/* Template Name: Customer Page */
?>
<?php get_header(); ?>

 

	<div class="arizona_section inner-section-1 text-center delivery-sec-1">				
		<div class="col-md-12"  >
			<img src="<?php echo the_field('delivery_banner_image'); ?>">
			<div class="section-align-middle"  > 
			<h3 class="subhead"><?php echo the_field('sub_page_title'); ?></h3>
				<h1 class="ban-h"><?php echo the_field('delivery_page_title'); ?></h1>
			</div>
		</div>			
	</div>

			
	<div class="arizona_section delivery-sec-2 padding-top-100 padding-bottom-100 customer-2">				
		<div class="container">
			<div class="text-center delivery-sec-2-top">
				<?php echo the_field('delivery_page_sec2_text'); ?>				
			</div>
			<div class="customer-form">				
					<?php if( have_rows('form_link') ): ?>
						<ul class="form-link">
						<?php while( have_rows('form_link') ): the_row(); 
								$head_text = get_sub_field('form_heading_text');
							$head_link = get_sub_field('form_heading_links');
							?>
							<li>
								<a class="arizon-button button" href="<?php the_sub_field('form_heading_links'); ?>" target="_blank"><?php the_sub_field('form_heading_text'); ?></a>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
			</div>
			
		</div>			
	</div>	

	<div class="arizona_section delivery-sec-3">
		<div class="container">
			<div class="col-md-12"  >
				<div class="sale-expert">
					<h2><?php echo the_field('sales_expert_heading'); ?>	</h2>
				</div>
				<div class="sales-map-form">
					<div class="map-form">
						<input type="text" placeholder="Texas">
						<input type="submit" value="Search"></>
					</div>
					<img src="<?php echo the_field('sale_map'); ?>"> 
				</div>
			</div>
		</div>
	</div>		

<?php get_footer(); ?>