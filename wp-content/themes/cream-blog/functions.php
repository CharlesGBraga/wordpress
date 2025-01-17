<?php
/**
 * Constant definition and call theme's main file and run it.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package    Cream_Blog
 * @author     Themebeez <themebeez@gmail.com>
 * @copyright  Copyright (c) 2018, Themebeez
 * @link       http://themebeez.com/themes/cream-blog/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

$cream_blog_theme = wp_get_theme( 'cream-blog' );

define( 'CREAM_BLOG_VERSION', $cream_blog_theme->get( 'Version' ) );

require get_template_directory() . '/inc/class-cream-blog.php';

/**
 * Theme's main function.
 *
 * @since 1.0.0
 */
function cream_blog_run() {
    $cream_blog = new Cream_Blog();
}

cream_blog_run();

// Adicionar conteúdo personalizado ao footer
function custom_footer_content() {
    ?>
    <div class="custom-footer-content">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/new_logo_02_brown.png" alt="Logo">
        </div>
        <!--<div class="footer-address">-->
            <!--<p><strong>Endereço</strong><br>-->
            <!--Pç. Monsenhor Guilherme Schmitz, s/n<br>
            Centro, Cep: 29190-054.</p>-->
            <!--<p><strong>Telefones:</strong><br>-->
            <!--(27) 3256-1456<br>-->
            <!--(27) 98141-5583</p>-->
        <!--</div>-->
		<div class="footer-copyright">
			<p>&copy; 2024 Paróquia São José de Anchieta. Theme: Cream Blog by <a href="https://themebeez.com/" target="_blank" rel="noopener noreferrer">Themebeez</a> - Developed by: PASCOM | Charles G. Braga</p>
		</div>
    </div>
    <?php
}
add_action( 'cream_blog_footer_bottom', 'custom_footer_content' );
