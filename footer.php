<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iteach
 */

?>

        <!-- SIGN UP SECTION
        ========================================================= -->
        <section id="signup" data-type="background" data-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                        <p><a href="#" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#myModal">Yes, sign me up!</a></p>
                                            
                    </div><!-- end col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- signup -->

        <!-- FOOTER
        ========================================================= -->
        <footer>
            <div class="container">
                <div class="col-sm-3">
                    <p><a href="/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/logo.png" alt="iTeach WordPress"></a></p>
                </div><!-- end col -->
                <div class="col-sm-6">
                    
                    <?php
						wp_nav_menu( array(
							
							'theme_location' => 'footer',
							'container' => 'nav',
							'menu_class' => 'list-unstyled list-inline',
							'fallback_cb'       => 'false'
						));
					?>
                    
                </div><!-- end col -->
                <div class="col-sm-3">
                    <p class="pull-right"><?php bloginfo( 'name' ); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
                </div><!-- end col -->
            </div><!-- container -->
        </footer>
   
        <!-- MODAL
        ========================================================= -->
        <div class="modal fade" id="myModal">
        	<div class="modal-dialog">
            	<div class="modal-content">
                	<div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope">Subscribe to our Mailing list</i></h4>
                    </div><!-- Modal Header -->
                    <div class="modal-body">
                    	<p>Simply enter your name and email! As a thank you for joinging us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                        
                        <form class="form-inline" role="form">
                        	<div class="form-group">
                            	<label class="sr-only" for="subscribe-name">Your first name</label>
                                <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                            </div><!-- form-group -->
                        	<div class="form-group">
                            	<label class="sr-only" for="subscribe-email">and your email</label>
                                <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                            </div><!-- form-group --> 
                            
                            <input type="submit" class="btn btn-danger" value="Subscribe!">
                        </form>
                        
                        <hr>
                        
                        <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br> No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                    </div>
                </div>
            </div>
        </div>
        
<!-- BOOTSTRAP CORE JAVASCRIPT
     Placed at the end of the document so the page
     loads faster!
========================================================= -->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
