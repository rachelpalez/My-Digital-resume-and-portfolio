<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer class="footer">
      <div class="container">
<div class="row">
<img src="http://localhost:8888/Digital%20resume%20and%20portfolio/wp-content/uploads/2019/10/r.png" class="faicons"></div>
    <div class="row">
    <div class="faicons">
        <a href="https://www.linkedin.com/in/rachel-palezevic-4b1721143/"><i class="fab fa-linkedin-in"></i></a>
<a href="contact.html"><i class="far fa-envelope"></i></a>
        <a href="rachelpalezevic.com"><i class="fas fa-chevron-up"></i></a></div></div>
      </div>
    </footer>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>