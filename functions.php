<?php
define( 'VCN_THEME_VERSION',  time() );
define( 'VCN_THEME_PATH', dirname( __FILE__ ) );
define( 'VCN_INCLUDES_PATH', VCN_THEME_PATH . '/includes' );
define( 'VCN_TEMPLATE_URI', get_template_directory_uri() );
define( 'VCN_TEMPLATE_DIR', get_template_directory() );

require_once 'includes/helpers.php';
require_once 'includes/enqueue.php';
require_once 'includes/custom-functions.php';