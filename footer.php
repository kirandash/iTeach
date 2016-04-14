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

<!-- BOOTSTRAP CORE JAVASCRIPT
     Placed at the end of the document so the page
     loads faster!
========================================================= -->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
