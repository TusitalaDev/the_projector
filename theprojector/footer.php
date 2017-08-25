<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theProjector
 */

?>

<?php wp_footer(); ?>

<!-- Footer 1 -->
<section id="footer1" style="">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/logo/logo-footer.png">
			</div>
			<div class="col-sm-4">
				<h5 class="sparse-text">HIRE THE CINEMA</h5>
				<p class="footer-desc">
					Previous clients to hire this unique space have included Google, Netflix, Silkair, Ikea, Guinness, Audemanrs Piguet, Universal Music, Expedia, Harley Davidson, StarHub, Edelman, Sony Playstation and many many more.
					<br>
					<br>
					Please e-mail <span class="brgold-undrl">info+hire@theprojector.sg</span> where one of our team will respond to your request.
				</p>
			</div>
			<div class="col-sm-4">
				<h5 class="sparse-text">WHERE WE ARE</h5>
				<p class="footer-address">
					6001 BEACH ROAD
					#05-00 GOLDEN MILE TOWER
					SINGAPORE 199589
					<br><br>
					NEAREST MRT - NICOLL HIGHWAY CC5
				</p>
			</div>
		</div>
		<hr style="margin-top:20px">
		<div class="row" style="padding: 10px 0">
			<div class="col-sm-4 txt-al-cent">
					<a class="social-media-btn" href="/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a class="social-media-btn" href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class="social-media-btn" href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="col-sm-2">
				<div class="footer-desc txt-al-cent">CONTACT US</div>
			</div>
			<div class="col-sm-2">
				<div class="footer-desc txt-al-cent">FAQs</div>
			</div>
			<div class="col-sm-2">
				<div class="footer-desc txt-al-cent">TERMS OF SERVICE</div>
			</div>
			<div class="col-sm-2">
				<div class="footer-desc txt-al-cent">PRIVACY POLICY</div>
			</div>
		</div>
		<hr>
	</div>
</section>

<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- slick -->
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/slick/slick.min.js"></script>

<!-- pickadate -->
<script src="<?php bloginfo('template_directory'); ?>/bower_components/pickadate/lib/picker.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/pickadate/lib/picker.date.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/pickadate/lib/picker.time.js"></script>

<!-- typekit fonts -->
<script type="text/javascript" src="https://use.typekit.net/gla7wnd.js"></script>

<script type="text/javascript">
	$('.carousel').carousel();
</script>
<script type="text/javascript">
	$('.slick-coming-soon').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});
		
</script>
<script type="text/javascript">
	$('#bookDayPicker').pickadate({
		// format: 'dd mmmm yyyy'
		format: 'DAY | ddd, dd mmm'
	});
</script>

</body>
</html>
