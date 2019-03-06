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
                get_template_part( 'template-parts/footer/footer', 'widgets' );
 
                if ( has_nav_menu( 'social' ) ) : ?>
                    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-links-menu',
                                'depth'          => 1,
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                            ) );
                        ?>
                    </nav><!-- .social-navigation -->
                <?php endif;
 
                get_template_part( 'template-parts/footer/site', 'info' );
 
                wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
                ?>
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> <p>Brought to you by <a CLASS=“red-academy” href=“http://www.redacademy.com/“>RED Academy</a></p>
    </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
 
</body>
</html>
