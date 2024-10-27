<?php
// phpcs:ignoreFile
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
require_once 'theme_config.php';
require_once 'elementor-init.php';