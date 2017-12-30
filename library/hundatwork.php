<?php
/**
 * Hund@work footer
 */

if ( ! function_exists( 'hundatwork_before_footer' ) ) :
function hundatwork_before_footer() {
    echo '<section class="large-4 columns">';
    echo '    <h6><strong>Kontakt</strong></h6>';
    echo '    <p>';
    echo '        <a href="javascript:linkTo_UnCryptMailto(\'nbjmup;jogpAivoebuxpsl/ef\');">info@<span class="visuallyhidden"> {at} </span>hundatwork.de</a><br />';
    echo '        www.hundatwork.de';
    echo '    </p>';
    echo '</section>';
    echo '<section class="large-5 columns">';
    echo '    <h6>&nbsp;</h6>';
    echo '    <p>';
    echo '        Telefon: 0711 - 16 12 68 68<br />';
    echo '        Mobil: 0178 - 1 89 49 39';
    echo '    </p>';
    echo '</section>';
    echo '<section class="large-3 columns">';
    echo '    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/hundatwork/sky.png" />';
    echo '</section>';
}

add_action( 'foundationpress_before_footer', 'hundatwork_before_footer' );
endif;

if ( ! function_exists( 'hundatwork_layout_end' ) ) :
function hundatwork_layout_end() {
    echo '<div id="copyright">';
    echo '    <div class="row">';
    echo '        <div class="large-6 columns">';
    echo '            <p>&copy; 2016 Hund@work Stuttgart</p>';
    echo '        </div>';
    echo '        <div class="large-6 columns">';
    echo '            <ul class="menu align-right">';
    echo '                <li><a href="/">Home</a></li>';
    echo '                <li><a href="/kontakt">Kontakt</a></li>';
    echo '                <li><a href="/impressum">Impressum</a></li>';
    echo '                <li><div class="g-plusone" data-size="medium"></div></li>';
    echo '                <li><a href="https://plus.google.com/115848055525284702798" title="Finden Sie uns auf Google+" style="text-decoration: none;" rel="publisher"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" width="16" height="16" style="border: 0;"></a></li>';
    echo '            </ul>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}

add_action( 'foundationpress_layout_end', 'hundatwork_layout_end' );
endif;
