<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

echo '<section class="our-team" id="team">';

	zerif_top_our_team_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">'; ?>
	<div class= "container">
		<div class ="row">
			<div class ="col-sm-6">
				<div class = "teaching-english">
					<div class = "teaching-title">
						<h3>Why teach at Ocean Edu?</h3>
					</div>
					<div class = "content1">
					<div class = "video-ocean">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VJZmOE52r8U?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
						<!-- <ul class = "text-bullets">
							<li class ="asdasd">Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
						</ul> -->
					</div>
				</div>
			</div> <!-- end of 1st column -->

			<div class="col-sm-6">
				<div class = "teaching-english2">
					<div class = "teaching-title">
						<h3>Join Our Team</h3>
					</div>
					<div class = "content2">
							<ul class = "text-bullets">
							<li class ="asdasd">Commitment to employees and customer</li>
							<li>Great benefits and competitive salary</li>
							<li>Regular Training and Assestments</li>
							<li>World Class teaching facilities</li>
							<li>and many more...</li>
						</ul> 
					</div>
					<div class="qualified"><h3><a href ="/qualifications/"><i class="fa fa-hand-o-right" aria-hidden="true" style="padding-right:2%;"></i>See our qualifications.</a></h3></div>
					<a href="/available-positions/"><div class ="button2">Apply Now!</div></a>
				</div>
			</div>
		</div>
	</div>
<?php
		echo '</div>';

// if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
// 	echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
// 	dynamic_sidebar( 'sidebar-ourteam' );
// 	echo '</div> ';
// } elseif ( current_user_can( 'edit_theme_options' ) ) {

// 	if ( is_customize_preview() ) {
// 		/* translators: Our team section */
// 		printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), __( 'Our team section','zerif-lite' ) );
// 	} else {
// 		/* translators: Our team section in customizer */
// 		printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Our team section','zerif-lite' ) ) );
// 	}
// }

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();

