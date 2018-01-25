<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krystal
 */

?>

	<!-- Begin Footer Section -->
	<footer id="footer">
        <div class="container">
            <div class="row">
                <?php
                    if(is_active_sidebar('footer-column1') || is_active_sidebar('footer-column2') || is_active_sidebar('footer-column3') || is_active_sidebar('footer-column4')){
                        ?>
                            <div class="footer-widgets-wrapper">
                                <?php
                                    if('3'===esc_attr(get_theme_mod( 'kr_footer_widgets' ))) {
                                        ?>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column1')){
                                                        dynamic_sidebar( 'footer-column1' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column2')){
                                                        dynamic_sidebar( 'footer-column2' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column3')){
                                                        dynamic_sidebar( 'footer-column3' );
                                                    }
                                                ?>                    
                                            </div>            
                                        <?php
                                    }
                                    else{
                                        ?>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column1')){
                                                        dynamic_sidebar( 'footer-column1' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column2')){
                                                        dynamic_sidebar( 'footer-column2' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column3')){
                                                        dynamic_sidebar( 'footer-column3' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column4')){
                                                        dynamic_sidebar( 'footer-column4' );
                                                    }
                                                ?>                    
                                            </div>            
                                        <?php
                                    }            
                                ?>
                            </div>
                        <?php                        
                    }
                ?>
            </div>

            <?php
              /**
               * Hook - krystal_action_footer.
               *
               * @hooked krystal_footer_copyrights - 10
               */
              do_action( 'krystal_action_footer' );
            ?>        	
            
        </div>
    </footer>
<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109716189-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109716189-3');
</script>
</body>
</html>