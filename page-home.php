<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>

				<div class="section01">				
						<div class="col-md-12"  >
							<?php if( get_field('video') ): ?>
								
									<div class="c-hero-homepage__iframe" style="background-image:url(<?php the_field('video_placeholder'); ?>)">
										<div class="js-vimeo-player" data-vimeo-initialized="true">
										  <!-- <iframe src="<?php the_field('video'); ?>?autoplay=1&amp;loop=1&amp;background=1&amp;muted=1&amp;autopause=0" width="100%" height="600" frameborder="0" ></iframe>
										-->   <video  width="100%" height="315" autoplay loop muted playsinline>
						  <source src="<?php the_field('video'); ?>" type="video/mp4">
						</video>	
												 <span data-aos="fade-right" data-aos-once="true" data-aos-offset="300" data-aos-easing="ease-in-sine"><h1 > <?php the_field('sec1heading'); ?></h1>  </span>						
										</div>
										
									 </div>						
							<?php endif; ?>	
						</div>			
				</div>
			
				<div class="section-02" id="sec2" >
					<div class="container">
						<div class="sec2logo" ><a  href="<?php the_field('section_2_logo_link'); ?>"><span><img class="rotating"  src="<?php the_field('section2_logo'); ?>"><img class="downarrow" src="/wp-content/uploads/2022/07/arrow.svg"></span></a></div>
						<div class="sec2-box" data-aos="fade-right" data-aos-once="true">
						<div class="sec2-head"><?php the_field('sec2heading'); ?></div>
						 <div class="sec2-subhead"><?php the_field('sec2subheading'); ?></div>
						 </div>
					</div>
				</div>
				<div class="section-03" style="background-image:url(<?php the_field('sec3bg'); ?>)" >
					<div class="container">
						<?php if( have_rows('list_main') ): ?>
								<ul class="list_content">
								<?php while( have_rows('list_main') ): the_row(); 
									$head = get_sub_field('list_heading');
									?>
									<li data-aos="zoom-in-up" data-aos-once="true">
										<img src="<?php the_sub_field('list_icon'); ?>" />
										<h3 class="value" data-speed="1000" data-count="<?php echo esc_html( $head ); ?>"><?php echo esc_html( $head ); ?></h3>
										<p><?php the_sub_field('list_content'); ?></p>
									</li>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							
					</div>
				</div>
				
				<div class="section-04 gallery-box">
					<div class="container">
						<div class="gallery-list">
							<div class="gallery-sec">						
					<?php if (have_rows("sec4_cont1")): ?>
							<?php while (have_rows("sec4_cont1")): the_row(); 
									$subhead = get_sub_field('sub_heading4');
									$head = get_sub_field('heading4');
								?>
<ul class="owl-carousel owl-theme sec4_content">
									<?php 
						       $images = get_sub_field("sec4_image");
if( $images ): ?>
    <?php foreach ($images as $image): 
		$data_type = pathinfo($image['url'], PATHINFO_EXTENSION);
		if ($data_type == 'mp4') {?>
		<li class="item">
			<video   width="100%" height="100%" autoplay loop muted playsinline>
				<source src="<?php echo $image['url'];?>" type="video/mp4">

			</video>
			<div class="box-cont"><h3><?php echo esc_html( $subhead ); ?></h3>
										<h2><?php echo esc_html( $head ); ?></h2>
										<a href="<?php the_sub_field('button_link'); ?>">Learn more</a></div></li>
				
		</li>
		<?php } else {?>
		<li class="item">
							<img src="<?php echo $image["sizes"]["large"]; ?>" alt="<?php echo $image[
    "alt"]; ?>" />	<div class="box-cont"><h3><?php echo esc_html( $subhead ); ?></h3>
										<h2><?php echo esc_html( $head ); ?></h2>
										<a href="<?php the_sub_field('button_link'); ?>">Learn more</a></div></li>
	<?php } endforeach; ?>
<?php endif; ?>
</ul>
							<?php endwhile; ?>

							<?php else: ?>

							// no images found

							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="section-5" >
					<div class="container">						
						<div class="sec2-box" data-aos="fade-right" data-aos-once="true" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<div class="sec2-head"><?php the_field('sec5heading'); ?></div>
						 <div class="sec2-subhead"><?php the_field('sec5subheading'); ?></div>
						 </div>
					</div>
				</div>
				<div class="section-6" >
					<div class="container">
						<div class="sec2-head"><?php the_field('sec6heading'); ?></div>
						<?php if( have_rows('logo_section') ): ?>
								<ul class="logo_section owl-carousel owl-theme">
								<?php while( have_rows('logo_section') ): the_row();?>
									<li class="item">
										<img src="<?php the_sub_field('logo'); ?>" / data-aos="zoom-in" data-aos-once="true" data-aos-offset="300" data-aos-easing="ease-in-sine">
										
									</li>
								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
							
					</div>
				</div>
				<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script>
$('.section-04 .owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoplay:true,
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
$('.section-6 .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
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
            items:5
        }
    }
})
</script>

<script>
  jQuery( document ).ready(function( $ ) {
	$(window).scroll(function() {
	    var scroll = $(window).scrollTop();

	    if (scroll >= 450) {
		$("body").addClass("skin_srolld");
	    } else {
		$("body").removeClass("skin_srolld");
	    }
	});
	
});
</script>

<script>
 $(document).ready(function () {

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

    $('.value').each(function () {   
	    $(this).text(0);
	});
  
  
  $(window).scroll(function () {
   $('.value').each(function () {
      if (isScrolledIntoView(this) === true) {
              $(this).prop('Counter',0).animate({
                  Counter: $(this).data('count')
              }, {
                  duration: 4000,
                  easing: 'swing',
                  step: function (now) {
                      $(this).text(Math.ceil(now));
                  }
              });
      }
   });
});


});
 $(document).ready(function () {

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

   
  
  
  $(window).scroll(function () {
   $('.section-02 .sec2-subhead').each(function () {
      if (isScrolledIntoView(this) === true) {
              $(".section-02 .sec2-head").addClass("colorchange");
      }
   });
});

   


});
 $(document).ready(function () {

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

   
  
  
  $(window).scroll(function () {
   $('.section-5 .sec2-subhead').each(function () {
      if (isScrolledIntoView(this) === true) {
              $(".section-5 .sec2-head").addClass("colorchange1");
      }
   });
});

   


});
</script>

<?php get_footer(); ?>