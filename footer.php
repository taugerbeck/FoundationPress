<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
            <section class="large-4 cell">
                <h6><strong>Kontakt</strong></h6>
                <p>
                    <a href="#" data-mailto="nbjmup;jogpAivoebuxpsl/ef">info@<span class="visuallyhidden"> {at} </span>hundatwork.de</a><br />
                    www.hundatwork.de
                </p>
            </section>
            <section class="large-5 cell">
                <h6>&nbsp;</h6>
                <p>
                    Telefon: 0711 - 16 12 68 68<br />
                    Mobil: 0178 - 1 89 49 39
                </p>
            </section>
            <section class="large-3 hide-for-small-only cell">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/hundatwork/sky.png" />
            </section>
        </div>
    </div>
</footer>
<div id="copyright" class="grid-x grid-padding-x">
		<div class="large-6 cell">
			<p>&copy; 2018 Hund@work Stuttgart</p>
		</div>
		<div class="large-6 cell">
			<ul class="menu align-right">
				<li><div class="g-plusone" data-size="medium"></div></li>
				<li><a href="https://plus.google.com/115848055525284702798" title="Finden Sie uns auf Google+" style="text-decoration: none;" rel="publisher"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" width="16" height="16" style="border: 0;"></a></li>
				<li><a href="/">Home</a></li>
				<li><a href="/kontakt">Kontakt</a></li>
				<li><a href="/impressum">Impressum</a></li>
			</ul>
		</div>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
