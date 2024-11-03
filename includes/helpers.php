<?php
// phpcs:ignoreFile
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
require_once 'theme_config.php';
require_once 'elementor-init.php';
require_once 'post-type-project.php';

add_action('template_redirect', 'redirect_projects_archive_to_elementor_page');
function redirect_projects_archive_to_elementor_page() {
    if (is_post_type_archive('projects')) {
        // Replace 'projects' with the actual ID or slug of your Elementor page.
        $projects_page = get_page_by_path('projects');
        if ($projects_page) {
            wp_redirect(get_permalink($projects_page->ID));
            exit;
        }
    }
}
