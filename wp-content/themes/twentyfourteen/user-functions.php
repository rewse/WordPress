<?php
function rewse_typesquare_head() {
  echo '<script type="text/javascript" src="//typesquare.com/accessor/script/typesquare.js?T-oMA8MY0BQ%3D" charset="utf-8"></script>';
}
add_action('wp_head', 'rewse_typesquare_head');

# Remove Jetpack's Open Graph meta tags
# See also <http://jetpack.me/2013/05/03/remove-open-graph-meta-tags/>
add_filter( 'jetpack_enable_open_graph', '__return_false' );
?>
