<?php
use ElementorPro\Modules\Posts\Widgets\Posts;
use ElementorPro\Modules\Posts\Skins\Skin_Classic;

class Custom_Skin extends Skin_Classic {

    public function get_id() {
        return 'custom_skin';
    }

    public function get_title() {
        return __( 'fractal skins', 'textdomain' );
    }

        public function render() {
        // Get the settings for this skin
        $settings = $this->parent->get_settings_for_display();

        // Query posts using Elementor's query functionality
        $this->parent->query_posts();

        /** @var \WP_Query $query */
        $query = $this->parent->get_query();

        if ( ! $query->found_posts ) {
            $this->handle_no_posts_found();
            return;
        }

        // Start rendering the HTML
        ?>
        <section class="flex flex-col items-center justify-center self-stretch">
            <div id="service-section-three" class="container max-w-[1170px] mx-auto px-4 py-[50px] w-full">
                <div class="gap-10 grid grid-cols-3 lg:grid-cols-3 md:grid-cols-3">
                    <?php
                    while ( $query->have_posts() ) : $query->the_post();
                        ?>
                        <div class="service-item">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                <img class="align-middle border-none max-w-full mb-5 rounded-lg w-full stm-img-210" src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            </a>
                            <div class="duration-500 ease-in-out pb-12 px-2 srv-box-info transition-all">
                                <h5 class="h5 hover:text-general-1-primary">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="[text-decoration:none] duration-300 text-gray-600 transition">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>
                                <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="[text-decoration:none] btn btn-prm servicecard-btn" role="button" aria-pressed="true">
                                    <?php esc_html_e( 'Read More', 'textdomain' ); ?>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </section>
        <?php

        wp_reset_postdata();
    }
}

class Custom_Posts_Widget extends Posts {

    public function get_name() {
        return 'custom_posts_el';
    }

    public function get_title() {
        return esc_html__( 'Custom Posts', 'textdomain' );
    }

    protected function register_skins() {
        // Call the parent skins registration to keep the default ones
        parent::register_skins();

        // Add your custom skin
        $this->add_skin( new Custom_Skin( $this ) );
    }
}

