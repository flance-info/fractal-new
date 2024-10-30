<?php

class Projects_Post_Type {

	// Constructor
	public function __construct() {
		// Hook into the 'init' action to register post type and taxonomy
		add_action( 'init', array( $this, 'register_post_type_and_taxonomy' ) );
	}

	// Method to register custom post type and taxonomy
	public function register_post_type_and_taxonomy() {
		$this->register_projects_post_type();
		$this->register_projects_taxonomy();
	}

	// Method to register the Projects custom post type
	private function register_projects_post_type() {
		$labels = array(
			'name'               => _x( 'Projects', 'Post type general name', 'textdomain' ),
			'singular_name'      => _x( 'Project', 'Post type singular name', 'textdomain' ),
			'menu_name'          => _x( 'Projects', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'     => _x( 'Project', 'Add New on Toolbar', 'textdomain' ),
			'add_new'            => __( 'Add New', 'textdomain' ),
			'add_new_item'       => __( 'Add New Project', 'textdomain' ),
			'new_item'           => __( 'New Project', 'textdomain' ),
			'edit_item'          => __( 'Edit Project', 'textdomain' ),
			'view_item'          => __( 'View Project', 'textdomain' ),
			'all_items'          => __( 'All Projects', 'textdomain' ),
			'search_items'       => __( 'Search Projects', 'textdomain' ),
			'not_found'          => __( 'No projects found.', 'textdomain' ),
			'not_found_in_trash' => __( 'No projects found in Trash.', 'textdomain' ),
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'projects' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_icon'          => 'dashicons-portfolio',
		);
		register_post_type( 'projects', $args );
	}

	// Method to register the Projects custom taxonomy
	private function register_projects_taxonomy() {
		$labels = array(
			'name'          => _x( 'Project Types', 'taxonomy general name', 'textdomain' ),
			'singular_name' => _x( 'Project Type', 'taxonomy singular name', 'textdomain' ),
			'search_items'  => __( 'Search Project Types', 'textdomain' ),
			'all_items'     => __( 'All Project Types', 'textdomain' ),
			'edit_item'     => __( 'Edit Project Type', 'textdomain' ),
			'update_item'   => __( 'Update Project Type', 'textdomain' ),
			'add_new_item'  => __( 'Add New Project Type', 'textdomain' ),
			'new_item_name' => __( 'New Project Type Name', 'textdomain' ),
			'menu_name'     => __( 'Project Types', 'textdomain' ),
		);
		$args = array(
			'hierarchical'      => true, // Set to 'true' like categories or 'false' like tags.
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'project-type' ),
		);
		register_taxonomy( 'project-type', array( 'projects' ), $args );
	}
}

// Initialize the class
new Projects_Post_Type();

function add_projects_to_elementor_posts_widget($query_args) {
    if (isset($query_args['post_type'])) {
        if ($query_args['post_type'] == 'post') {
            // If 'post' is selected, also add 'projects'
            $query_args['post_type'] = array('post', 'projects');
        } elseif (is_array($query_args['post_type'])) {
            // Ensure 'projects' is included if the post_type is an array
            $query_args['post_type'][] = 'projects';
            $query_args['post_type'] = array_unique($query_args['post_type']);
        }
    }
    return $query_args;
}

add_filter('elementor/query/query_args', 'add_projects_to_elementor_posts_widget');

if ( class_exists( 'Elementor\Widget_Base' ) ) {

    class Custom_Posts_Skin extends \ElementorPro\Modules\Posts\Skins\Skin_Classic {

        public function get_id() {
            return 'custom_skin';
        }

        public function get_title() {
            return __( 'Custom Skin', 'textdomain' );
        }

        protected function render() {
            // Custom rendering logic for the skin
            $settings = $this->parent->get_settings_for_display();

            // Your custom HTML structure
            ?>
            <div class="custom-posts-skin">
                <div class="custom-post-thumbnail">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="custom-post-content">
                    <h2 class="custom-post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="custom-post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    // Add the custom skin to Elementor Posts widget
    add_action( 'elementor/widget/posts/skins_init', function( $widget ) {
        $widget->add_skin( new Custom_Posts_Skin( $widget ) );
    });
}






