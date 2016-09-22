<?php

# Remove Jetpack's Open Graph meta tags
# See also <http://jetpack.me/2013/05/03/remove-open-graph-meta-tags/>
add_filter( 'jetpack_enable_open_graph', '__return_false' );
add_filter( 'jetpack_remove_login_form', '__return_true' );
?>
