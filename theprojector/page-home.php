<?php
/*
	Template Name: Home Page
*/

// advanced custom fields


get_header(); ?>

<!-- Movie | Timeslot -->
<section id="mov-timeslot">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 ">
				<h5>
					<div class="tp-arrow-in-circle">
						<i class="fa fa-angle-left " aria-hidden="true"></i>
					</div>
					<small style="margin-left:15px">PREVIOUS DAY</small>
					
				</h5>
			</div>
			<div class="col-sm-6 " style="padding-top:5px">
				<div class="" style="position:relative">
					<p style="display:inline" class="">
					<input class="txt-al-cent" id="bookDayPicker" type="" name="" style="background-color: transparent;border:none;text-transform: uppercase;width:100%;cursor: pointer;" value="TODAY | WED, 13 DEC">
					
					</p>
					<div class="tp-calendar-in-circle "><i class="fa fa-calendar " aria-hidden="true" ></i></div>
				</div>
					
			</div>
			<div class="col-sm-3 " >
				<h5 class="pull-right"><small style="margin-right:15px">NEXT DAY</small>
					<div class="tp-arrow-in-circle">
						<i class="fa fa-angle-right " aria-hidden="true"></i>
					</div>
				</h5>
			</div>
			<div class="clearfix"></div>	
		</div>
		<hr>
		<?php $loop = new WP_Query( array( 'post_type' => 'movie',
											'orderby' => 'post_id', 
											'order' => 'ASC' )); 
				?>

		<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			<div class="row mov-timeslot-row">
				<div class="col-sm-2 sparse-text">
					<div class="timeslot-box timeslot-time-display" style="">

						10.00<br>AM
						
					</div>
					<div class="timeslot-buy-btn" style="">
						BUY
					</div>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo get_field('movie_poster')['url']; ?>" alt="<?php echo get_field('movie_poster')['alt']; ?>">
				</div>
				<div class="col-sm-6" style="padding-left:50px">
					<h4 class="sparse-text mov-title-w-rating text-uppercase" style=""><?php the_title(); ?></h4><h6 style="" class="age-rating text-uppercase"><?php the_field('age_rating') ?></h6>
					<p class="mov-desc"><?php the_field('movie_description'); ?>
					</p>
					<div class="row">
						<div class="col-sm-4">
							<a href="" class="btn btn-default btn-block">MORE</a>
						</div>
						<div class="col-sm-4">
							<a href="" class="btn btn-primary btn-block">TRAILER</a>
						</div>
					</div>
					
				</div>
				
			</div>
		<?php endwhile; wp_reset_query();?>
		
				
		<!-- <div class="row mov-timeslot-row">
			<div class="col-sm-2 sparse-text">
				<div class="timeslot-box timeslot-time-display" style="">

					11.00<br>AM
					
				</div>
				<div class="timeslot-buy-btn" style="">
					BUY
				</div>
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/kimi-no-na-wa.jpg">
			</div>
			<div class="col-sm-6" style="padding-left:50px">
				<h4 class="sparse-text mov-title-w-rating" style="">Stars Overload dadsdsa dsad as dsad sa dsa dsad sa</h4><h6 style="" class="age-rating text-uppercase">PG 13</h6>
				<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
				</p>
				<div class="row">
					<div class="col-sm-4">
						<a href="" class="btn btn-default btn-block">MORE</a>
					</div>
					<div class="col-sm-4">
						<a href="" class="btn btn-primary btn-block">TRAILER</a>
					</div>
				</div>
				
			</div>
			
		</div> -->
		<div class="row">
		<br>
		<br>
			<div class="col-sm-4 col-sm-offset-4 txt-al-cent">
				<h6 class="sparse-text">SHOW MORE</h6>
				<br>
				<div class="down-more-arrow">
					<img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/Icons/arrow-down.svg" width="30">
				</div>
				
			</div>
			<div class="clearfix"></div>
			<br>
			<br>
			<div class="col-sm-4 col-sm-offset-4">
				<a href="" class="btn btn-primary btn-block">SEE FULL CALENDAR ></a>
			</div>
			<div class="clearfix"></div>
		</div>

		<br>
		<br>
		<br>
		<hr>
	</div> <!-- container -->
</section>

<!-- NOW SHOWING SECTION -->
<section id="nowshowing">
	<div class="container">
		<div class="row">
			<div class="section-header">
				<h3 class="sparse-text">NOW SHOWING</h3>
			</div>
		</div>
		

			<div class="row">
				<?php $loop = new WP_Query( array( 'post_type' => 'movie',
											'orderby' => 'post_id', 
											'order' => 'ASC' )); 
				?>

				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="col-sm-4">
						<div class="">

							<img src="<?php echo get_field('movie_poster')['url']; ?>" alt="<?php echo get_field('movie_poster')['alt']; ?>">
						</div>
						<br>
						<div class="" style="">
							<h4 style="width:80%;display:inline-block" class="sparse-text text-uppercase"><?php the_title(); ?></h4><h6 style="" class="age-rating text-uppercase"><?php the_field('age_rating') ?></h6>
							<hr>
							<p class="mov-desc"><?php the_field('movie_description'); ?>
							</p>
							<div class="row" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
									<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
								</div>
							</div>
							
						</div>
					</div>
				<?php endwhile; wp_reset_query();?>



				<!-- <div class="col-sm-4">
					<div class="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/kimi-no-na-wa.jpg">
					</div>
					<br>
					<div class="" style="">
						<h4 style="width:80%;display:inline-block" class="sparse-text">Stars Overload </h4><h6 style="" class="age-rating">PG 13</h6>
						<hr>
						<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
						</p>
						<div class="row" style="text-align: center">
							<div class="col-sm-12">
								<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
								<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/misshokusai_a.jpg">
					</div>
					<br>
					<div class="" style="">
						<h4 style="width:80%;display:inline-block" class="sparse-text">Painting Dragons</h4><h6 style="" class="age-rating">PG 13</h6>
						<hr>
						<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
						</p>
						<div class="row" style="text-align: center">
							<div class="col-sm-12">
								<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
								<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/methode-times-prod-web-bin-47b59b1a-7054-11e6-acba-85f5c900fc1a.jpg">
					</div>
					<br>
					<div class="" style="">
						<h4 style="width:80%;display:inline-block" class="sparse-text">Brand New Suit Orange is My Color</h4><h6 style="" class="age-rating">PG 13</h6>
						<hr>
						<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
						</p>
						<div class="row" style="text-align: center">
							<div class="col-sm-12">
								<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
								<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-4">
					<div class="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/methode-times-prod-web-bin-47b59b1a-7054-11e6-acba-85f5c900fc1a.jpg">
					</div>
					<br>
					<div class="" style="">
						<h4 style="width:80%;display:inline-block" class="sparse-text">Brand New Suit </h4><h6 style="" class="age-rating">PG 13</h6>
						<hr>
						<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
						</p>
						<div class="row" style="text-align: center">
							<div class="col-sm-12">
								<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
								<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/kimi-no-na-wa.jpg">
					</div>
					<br>
					<div class="" style="">
						<h4 style="width:80%;display:inline-block" class="sparse-text">Stars Overload </h4><h6 style="" class="age-rating">PG 13</h6>
						<hr>
						<p class="mov-desc">Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu. Nulla facilisi. Phasellus lacinia, felis cursus ornare blandit, nulla turpis tempus ligula, et hendrerit lectus urna eu odio. Quisque auctor venenatis nisl, non ultrices sem imperdiet pretium
						</p>
						<div class="row" style="text-align: center">
							<div class="col-sm-12">
								<a href="" class="btn btn-default " style="margin-right:20px;width:33.3333%">MORE</a>
								<a href="" class="btn btn-primary " style="width:33.3333%">TRAILER</a>
							</div>
						</div>
						
					</div>
				</div> -->
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<a href="" class="btn btn-primary btn-block">SEE FULL LIST OF MOVIES ></a>
				</div>
				
			</div>
			<br>
			<br>
			<hr>
		</div>

		
	</div>


	
</section>

<!-- COMING SOON SECTION -->
<section>
	<div class="container">
		<div class="row">
			<div class="section-header">
				<h3 class="sparse-text">COMING SOON</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="slick-coming-soon">
				  	<div>
					  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/Miss-Saigon.jpg">
					  	<div class="slide-caption">
					  		<h4 style="width:80%;display:inline-block" class="sparse-text">Stars Overload </h4><h6 style="" class="age-rating">PG 13</h6>
					  		
					  		<hr >
					  		<p class="mov-desc">
					  			Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu.
					  		</p>
					  		<div class="row cap-button" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default " style="margin-right:20px;width:40%">MORE</a>
									<a href="" class="btn btn-primary " style="width:40%">TRAILER</a>
								</div>
							</div>
					  	</div>
				  	</div>
				  	<div>
					  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/wizard-oz.jpg">
					  	<div class="slide-caption">
					  		<h4 style="width:80%;display:inline-block" class="sparse-text">Wiz wiz </h4><h6 style="" class="age-rating">PG 13</h6>
					  		
					  		<hr >
					  		<p class="mov-desc">
					  			Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien.
					  		</p>
					  		<div class="row" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default " style="margin-right:20px;width:40%">MORE</a>
									<a href="" class="btn btn-primary " style="width:40%">TRAILER</a>
								</div>
							</div>
					  	</div>
				  	</div>
				  	<div>
					  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/moonlight-movie-reviews.jpg">
					  	<div class="slide-caption">
					  		<h4 style="width:80%;display:inline-block" class="sparse-text">Random Guy </h4><h6 style="" class="age-rating">PG 13</h6>
					  		
					  		<hr >
					  		<p class="mov-desc">
					  			Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu.
					  		</p>
					  		<div class="row" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default " style="margin-right:20px;width:40%">MORE</a>
									<a href="" class="btn btn-primary " style="width:40%">TRAILER</a>
								</div>
							</div>
					  	</div>
				  	</div>
				  	<div>
					  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/Miss-Saigon.jpg">
					  	<div class="slide-caption">
					  		<h4 style="width:80%;display:inline-block" class="sparse-text">Stars Overload </h4><h6 style="" class="age-rating">PG 13</h6>
					  		
					  		<hr >
					  		<p class="mov-desc">
					  			Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu.
					  		</p>
					  		<div class="row" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default " style="margin-right:20px;width:40%">MORE</a>
									<a href="" class="btn btn-primary " style="width:40%">TRAILER</a>
								</div>
							</div>
					  	</div>
				  	</div>
				  	<div>
					  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/Miss-Saigon.jpg">
					  	<div class="slide-caption">
					  		<h4 style="width:80%;display:inline-block" class="sparse-text">Stars Overload </h4><h6 style="" class="age-rating">PG 13</h6>
					  		
					  		<hr >
					  		<p class="mov-desc">
					  			Nunc leo felis, efficitur id mauris ac, venenatis tincidunt sapien. Nam vitae erat tincidunt, feugiat nulla at, dignissim arcu.
					  		</p>
					  		<div class="row" style="text-align: center">
								<div class="col-sm-12">
									<a href="" class="btn btn-default two-btn-lay" style="">MORE</a>
									<a href="" class="btn btn-primary two-btn-lay" >TRAILER</a>
								</div>
							</div>
					  	</div>
				  	</div>
				</div> <!-- slick -->
			</div>	<!-- col -->
		</div> <!-- row -->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<a href="" class="btn btn-primary btn-block">SEE FULL LIST OF MOVIES ></a>
			</div>
			
		</div>
		<br>
		<br>
		<hr>
		
	</div>
</section>

<!-- EVENTS section -->
<section id="eventSection">
	<div class="container">
		<div class="row">
			<div class="section-header">
				<h3 class="sparse-text">EVENT</h3>
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/14141663_10154057777728152_6750793091474051325_n.jpg">
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/14463038_1853426448219894_2978553332874255344_n.jpg">
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/14681901_1858118001084072_7374303229993464418_o.jpg">
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/16179713_1918214778407727_307249267848826523_o.jpg">
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/Project_IFFR@2x.gif">
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/events/wizard_of_oz_ver2_xlg.jpg">
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<a href="" class="btn btn-primary btn-block">SEE FULL LIST OF EVENTS ></a>
			</div>
		</div>
		<br>
		<br>
		<hr >
	</div>
</section>

<!-- Join mailing list -->
<section id="joinMailingList" >
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h5 class="sparse-text">JOIN OUR MAILING LIST</h5>
			</div>
			<div class="col-sm-2">
				<input class="form-control" type="" name="" placeholder="FIRST NAME">
			</div>
			<div class="col-sm-2">
				<input class="form-control" type="" name="" placeholder="LAST NAME">
			</div>
			<div class="col-sm-2">
				<input class="form-control" type="" name="" placeholder="EMAIL">
			</div>
			<div class="col-sm-2">
				<input class="btn btn-block brgold" type="" name="" value="SUBMIT">
			</div>
		</div>
		<hr style="margin-top:25px">
	</div>
</section>

<?php
// get_sidebar();
get_footer();
