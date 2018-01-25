<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package zerif-lite
 */

?>

</div><!-- .site-content -->



<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	

	<div class="container">
		<div class ="row">
			<div class="col-md-4 col-sm-12 box-bottom-logo">
                    <div class="box-img-bottom-logo">
                        <img src="http://ocean.edu.vn/Content/images/v2/logo-bot.png" alt="Ocean Edu" class="">
                    </div>
                    <div class="company-bottom">CÔNG TY CỔ PHẦN GIÁO DỤC ĐẠI DƯƠNG</div>
                    <div class="brand-bottom">Ocean Edu Vietnam</div>
                    <address class="add-bottom">
                        <br>
                        Tòa nhà Ocean Edu, 204 Nguyễn Lương Bằng, Đống Đa, Hà Nội<br>
                        Tel: <a href="tel:19006494">1900 6494</a> - <a href="tel:02473000333">02473 000 333</a><br/>
                        Email: Trainingdepartment@oceanedu.vn
                    </address>
                </div>


                <div class="col-md-8 hidden-xs" style="padding-top: 20px;">
                  
                    <div class="row">
                        <div class="col-md-4">
                            <b class="font-roboto" style="color: #fff;">About Ocean Edu</b>
                            <ul class="list-bottom">
                                    <li><a href="/ocean-edu-introduction/">Introduction</a></li>
                                    <li><a href="/facilities/">Why Work at Ocean Edu</a></li>
                                    <li><a href="/branch-locations/">Branch Locations</a></li>
                                    <li><a href="/awards-and-recognition/">Ocean Edu Teachers</a></li>
                                   
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <b class="font-roboto" style="color: #fff;">Teaching Jobs</b>
                            <ul class="list-bottom2">
                                     <li><a href="/qualifications/">Qualifications</a></li>
                                     <li><a href="/available-positions/">Available Positions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
						<b class="font-roboto" style="color: #fff;">OCEAN EDU TRÊN FACEBOOK</b>
                            <iframe style ="margin-left: 7%;" src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/oceaneduteachingjobs/&amp;tabs&amp;width=165&amp;height=170&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1514932012164173" width="230" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                    </div>
                </div>


		</div> <!-- end of row-->



	</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->



	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->

<?php
/**
 *  Fix for sections with widgets not appearing anymore after the hide button is selected for each section
 */

if ( is_customize_preview() ) {

	if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourfocus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-aboutus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourteam' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-testimonials' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-testimonials' );
		echo '</div>';
	}
}

?>

<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a0b9f17198bd56b8c03b2c0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- MailMunch for TeachingJobs -->
<!-- Paste this code right before the </head> tag on every page of your site. -->
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="444129" async="async"></script>

<!-- End of MailMunch for TeachingJobs -->

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a0e3d6c48752966"></script> 
</body>

</html>
