<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>
 
        </div><!-- #content -->
 
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">
                 <?php
                 wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> <p class="red-academy">Brought to you by <a CLASS="red-academy" href="http://www.redacademy.com/">RED Academy</a></p>

            </div><!-- .wrap -->

        </footer><!-- #colophon -->
		
    </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
 
</body>
</html>
