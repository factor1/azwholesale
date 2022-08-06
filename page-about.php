<?php
/* Template Name: About Us Page */
?>
<?php get_header(); ?>

				
				<div class="section-04"  >
					<div class="container">
						
					<?php if( have_rows('sec4_cont') ): ?>

							<?php while ( have_rows('sec4_cont') ) : the_row(); ?>

									<ul class="owl-carousel owl-theme">
							<?php $images = get_sub_field('gallery1');

							if( $images ): ?>
							   
							<?php foreach( $images as $image ): ?>
							           
							<li class="item">


							<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />


							</li>
							           
							<?php endforeach; ?>

							   
							<?php endif; ?>
								</ul>
							<?php endwhile; ?>

							<?php else : ?>

							// no images found

							<?php endif; ?>
						
						
						
					
					</div>
				</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script>
$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>			
<?php get_footer(); ?>
