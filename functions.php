<?php

if ( ! function_exists( 'druo_simple_scripts' ) ) {
    /**
     *  Add theme styles and scripts.
     */
    function druo_simple_scripts() {
        wp_enqueue_style('druo-simple-style', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get('Version'));
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
    }

    add_action('wp_enqueue_scripts', 'druo_simple_scripts');
}

if ( ! function_exists( 'druo_simple_setup' ) ) {
    /**
     *  Add theme features.
     */
    function druo_simple_setup() {
        // Load text domain.
        load_theme_textdomain('druo', get_template_directory() . '/i18n');
        /*
             * Let WordPress manage the document title.
             * This theme does not use a hard-coded <title> tag in the document head,
             * WordPress will provide it for us.
             */
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'druo_simple_setup');
}

if ( ! function_exists( 'druo_simple_widgets_init' ) ) {
    /**
     * Init widgets area.
     */
    function druo_simple_widgets_init() {
        register_sidebar(
            array(
                'name' => esc_html__('Footer', 'druo'),
                'id' => 'footer-1',
                'description' => esc_html__('Add widgets here to appear in your footer.', 'druo'),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
        );
    }
    add_action('widgets_init', 'druo_simple_widgets_init');
}

if ( ! function_exists( 'druo_simple_admin_enqueue_scripts' ) ) {
    /**
     *  Load admin assets.
     */
    function druo_simple_admin_enqueue_scripts() {
        $config = [
            'ajax_url' => admin_url('admin-ajax.php'),
            'security' => wp_create_nonce("druo_simple"),
            'cm_settings' => [
                'codeEditor' => wp_enqueue_code_editor(['type' => 'css'])
            ]
        ];
        wp_register_script('druo-simple-admin-scripts', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'wp-theme-plugin-editor'], wp_get_theme()->get('Version'));
        wp_localize_script('druo-simple-admin-scripts', 'druo_simple', $config);
        wp_enqueue_script('druo-simple-admin-scripts');
    }

    add_action('admin_enqueue_scripts', 'druo_simple_admin_enqueue_scripts');
}

if ( ! function_exists( 'druo_simple_custom_css' ) ) {
    /**
     *  Add custom css rules to a page.
     */
    function druo_simple_custom_css() {
        $custom_css = false;
        if ( is_page() ) {
            $custom_css = get_field('custom_css');
            $template_box_width = get_field('template_box_width');
        }
        // Define default template width.
        if (empty($template_box_width)) {
            $template_box_width = 510;
        }
        ?>
        <style>
            @media only screen and (min-width: <?php echo $template_box_width + 3; ?>px) {
                .box-template {
                    width: <?php echo $template_box_width; ?>px;
                    margin: auto;
                    -webkit-box-shadow: rgba(0,0,0,0.15) 0px 3px 15px 6px;
                    -moz-box-shadow: rgba(0,0,0,0.15) 0px 3px 15px 6px;
                    box-shadow: rgba(0,0,0,0.15) 0px 3px 15px 6px;
                    border: 1px solid #E4E4E5;
                    background-image: none;
                    padding-bottom: 0;
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    border-radius: 10px;
                }
                <?php include get_template_directory() . '/assets/css/desktop.css'; ?>
            }
        </style>
        <?php
        if ( ! empty($custom_css) ) {
            ?>
            <style>
                <?php echo do_shortcode($custom_css); ?>
            </style>
            <?php
        }
    }
    add_action( 'wp_head', 'druo_simple_custom_css' );
}

if ( ! function_exists( 'druo_simple_acf_init' ) ) {
    /**
     * Add ACF fields.
     */
    function druo_simple_acf_init() {
        require_once get_template_directory() . '/integration/acf/Fields.php';
    }

    add_action('acf/init', 'druo_simple_acf_init');
}

if ( ! function_exists( 'druo_simple_the_posts_navigation' ) ) {
    /**
     * Print the next and previous posts navigation.
     *
     * @since DRUO Simple 1.0
     *
     * @return void
     */
    function druo_simple_the_posts_navigation() {
        the_posts_pagination(
            array(
                'mid_size'           => 0,
                'before_page_number' => esc_html__( 'Page', 'druo' ) . ' ',
                'prev_text'          => sprintf(
                    '<span class="nav-prev-text">%s</span>',
                    wp_kses(
                        __( 'Newer <span class="nav-short">posts</span>', 'druo' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    )
                ),
                'next_text'          => sprintf(
                    '<span class="nav-next-text">%s</span>',
                    wp_kses(
                        __( 'Older <span class="nav-short">posts</span>', 'druo' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    )
                ),
            )
        );
    }
}
