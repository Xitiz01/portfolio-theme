<?php
/**
 * Home Page Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'my_portfolio_customize_home' ) ) {
    function my_portfolio_customize_home( $wp_customize ) {
        // Home Panel
        $wp_customize->add_panel( 'home_panel', array(
            'title'    => __( 'Home Page', 'my-portfolio' ),
            'priority' => 10,
        ) );
        // Hero Section
        $wp_customize->add_section( 'home_hero_section', array(
            'title'    => __( 'Hero Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 10,
        ) );
        $wp_customize->add_setting( 'home_hero_title', array(
            'default'           => 'Xitiz is a <span class="accent">web designer</span> and <span class="accent">front-end developer</span>',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_title', array(
            'label'    => __( 'Hero Title', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_hero_subtitle', array(
            'default'           => 'He crafts responsive websites where technologies<br>meet creativity',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_subtitle', array(
            'label'    => __( 'Hero Subtitle', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_hero_button_text', array(
            'default'           => 'Contact me !!',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_hero_button_text', array(
            'label'    => __( 'Hero Button Text', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_hero_button_link', array(
            'default'           => '#contacts',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_hero_button_link', array(
            'label'    => __( 'Hero Button Link', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'url',
        ) );
        $wp_customize->add_setting( 'home_hero_image', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_hero_image', array(
            'label'    => __( 'Hero Image', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'settings' => 'home_hero_image',
        ) ) );
        $wp_customize->add_setting( 'home_hero_status', array(
            'default'           => 'Currently working on my self',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_status', array(
            'label'    => __( 'Hero Status', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        // Quote Section
        $wp_customize->add_section( 'home_quote_section', array(
            'title'    => __( 'Quote Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 20,
        ) );
        $wp_customize->add_setting( 'home_quote_text', array(
            'default'           => 'With great power comes great electricity bill',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_quote_text', array(
            'label'    => __( 'Quote Text', 'my-portfolio' ),
            'section'  => 'home_quote_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_quote_author', array(
            'default'           => 'Dr. Who',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_quote_author', array(
            'label'    => __( 'Quote Author', 'my-portfolio' ),
            'section'  => 'home_quote_section',
            'type'     => 'text',
        ) );
        // Projects Section
        $wp_customize->add_section( 'home_projects_section', array(
            'title'    => __( 'Projects Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 30,
        ) );
        // Skills Section
        $wp_customize->add_section( 'home_skills_section', array(
            'title'    => __( 'Skills Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 40,
        ) );
        $wp_customize->add_setting( 'home_skills_title', array(
            'default'           => 'Skills',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_title', array(
            'label'    => __( 'Skills Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_languages_title', array(
            'default'           => 'Languages',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_languages_title', array(
            'label'    => __( 'Languages Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_databases_title', array(
            'default'           => 'Databases',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_databases_title', array(
            'label'    => __( 'Databases Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_tools_title', array(
            'default'           => 'Tools',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_tools_title', array(
            'label'    => __( 'Tools Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_other_title', array(
            'default'           => 'Other',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_other_title', array(
            'label'    => __( 'Other Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_frameworks_title', array(
            'default'           => 'Frameworks',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_frameworks_title', array(
            'label'    => __( 'Frameworks Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_skills_languages', array(
            'default'           => 'TypeScript Lua\nPython JavaScript',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_languages', array(
            'label'    => __( 'Languages', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_skills_databases', array(
            'default'           => 'SQLite PostgreSQL\nMongo',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_databases', array(
            'label'    => __( 'Databases', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_skills_tools', array(
            'default'           => 'VSCode Neovim Linux\nFigma XFCE Arch\nGit Font Awesome',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_tools', array(
            'label'    => __( 'Tools', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_skills_other', array(
            'default'           => 'HTML CSS EJS SCSS\nREST Jinja',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_other', array(
            'label'    => __( 'Other', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_skills_frameworks', array(
            'default'           => 'React Vue\nDisnake Discord.js\nFlask Express.js',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_frameworks', array(
            'label'    => __( 'Frameworks', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );
        // About Me Section
        $wp_customize->add_section( 'home_aboutme_section', array(
            'title'    => __( 'About Me Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 50,
        ) );
        $wp_customize->add_setting( 'home_aboutme_intro', array(
            'default'           => "Hello, I'm Xitiz!",
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_intro', array(
            'label'    => __( 'About Me Intro', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_aboutme_text', array(
            'default'           => "I'm a self-taught front-end developer based in Kathmandu, Nepal. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences. Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.",
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_text', array(
            'label'    => __( 'About Me Text', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'textarea',
        ) );
        $wp_customize->add_setting( 'home_aboutme_image', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_aboutme_image', array(
            'label'    => __( 'About Me Image', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'settings' => 'home_aboutme_image',
        ) ) );
        $wp_customize->add_setting( 'home_aboutme_button_text', array(
            'default'           => 'View all →',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_button_text', array(
            'label'    => __( 'About Me Button Text', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'text',
        ) );
        $wp_customize->add_setting( 'home_aboutme_button_link', array(
            'default'           => '#about',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_aboutme_button_link', array(
            'label'    => __( 'About Me Button Link', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',   
            'type'     => 'url',
        ) );


        // Contacts Section (add left-side description control)
        $wp_customize->add_section( 'home_contacts_section', array(
            'title'    => __( 'Contacts Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 60,
        ) );
        $wp_customize->add_setting( 'home_contacts_text', array(
            'default'           => "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me",
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_contacts_text', array(
            'label'    => __( 'Contacts Description', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'textarea',
        ) );
        // Contacts Section (add different social links control)
        $wp_customize->add_setting( 'home_contacts_social_title', array(
            'default'           => 'Message me here',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_contacts_social_title', array(
            'label'    => __( 'Contacts Social Title', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'text',
        ) );
        // Email
        $wp_customize->add_setting( 'home_contacts_email', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_email', array(
            'label'    => __( 'Email URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );

        // Discord
        $wp_customize->add_setting( 'home_contacts_discord', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_discord', array(
            'label'    => __( 'Discord URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );
        // Twitter
        $wp_customize->add_setting( 'home_contacts_twitter', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_twitter', array(
            'label'    => __( 'Twitter URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );
        // GitHub
        $wp_customize->add_setting( 'home_contacts_github', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_github', array(
            'label'    => __( 'GitHub URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );
        // LinkedIn
        $wp_customize->add_setting( 'home_contacts_linkedin', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_linkedin', array(
            'label'    => __( 'LinkedIn URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );
        // Instagram
        $wp_customize->add_setting( 'home_contacts_instagram', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_instagram', array(
            'label'    => __( 'Instagram URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );    
        // WhatsApp
        $wp_customize->add_setting( 'home_contacts_whatsapp', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_contacts_whatsapp', array(
            'label'    => __( 'WhatsApp URL', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'url',
        ) );    


        // Sidebar Social Links Section
        $wp_customize->add_section( 'home_sidebar_social_section', array(
            'title'    => __( 'Sidebar Social Links', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 5,
        ) );
        $wp_customize->add_setting( 'home_sidebar_github', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_github', array(
            'label'    => __( 'GitHub URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
        $wp_customize->add_setting( 'home_sidebar_dribbble', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_dribbble', array(
            'label'    => __( 'Dribbble URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
        $wp_customize->add_setting( 'home_sidebar_portfolio', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_portfolio', array(
            'label'    => __( 'Portfolio/Key URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
    }
    add_action( 'customize_register', 'my_portfolio_customize_home', 9 );
}

// Minimal Customizer Repeater Control for Projects
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'My_Portfolio_Projects_Repeater_Control' ) ) {
    class My_Portfolio_Projects_Repeater_Control extends WP_Customize_Control {
        public $type = 'projects_repeater';
        public function enqueue() {
            wp_enqueue_script( 'my-portfolio-customizer-repeater', get_template_directory_uri() . '/assets/js/customizer-repeater.js', array( 'jquery', 'customize-controls' ), '1.0', true );
            wp_enqueue_style( 'my-portfolio-customizer-repeater', get_template_directory_uri() . '/assets/css/customizer-repeater.css', array(), '1.0' );
        }
        public function render_content() {
            $value = $this->value();
            $projects = get_posts( array( 'post_type' => 'projects', 'numberposts' => -1 ) );
            $selected = is_array( $value ) ? $value : array();
            ?>
            <label><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span></label>
            <div class="my-portfolio-repeater-list">
                <?php
                if ( ! empty( $selected ) ) {
                    foreach ( $selected as $i => $project_id ) {
                        ?>
                        <div class="my-portfolio-repeater-item">
                            <select class="my-portfolio-project-select" name="<?php echo esc_attr( $this->id ); ?>[<?php echo $i; ?>]">
                                <option value="">-- Select Project --</option>
                                <?php foreach ( $projects as $project ) : ?>
                                    <option value="<?php echo esc_attr( $project->ID ); ?>" <?php selected( $project_id, $project->ID ); ?>><?php echo esc_html( $project->post_title ); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>
                        </div>
                        <?php
                    }
                } else {
                    // Render one empty item as a template
                    ?>
                    <div class="my-portfolio-repeater-item">
                        <select class="my-portfolio-project-select" name="<?php echo esc_attr( $this->id ); ?>[0]">
                            <option value="">-- Select Project --</option>
                            <?php foreach ( $projects as $project ) : ?>
                                <option value="<?php echo esc_attr( $project->ID ); ?>"><?php echo esc_html( $project->post_title ); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>
                    </div>
                    <?php
                }
                ?>
            </div>
            <button type="button" class="button my-portfolio-repeater-add">Add Project</button>
            <input type="hidden" <?php $this->link(); ?> value='<?php echo esc_attr( json_encode( $selected ) ); ?>' class="my-portfolio-repeater-hidden" />
            <?php
        }
    }
}
// Register the repeater setting and control
add_action( 'customize_register', function( $wp_customize ) {
    $wp_customize->add_setting( 'home_projects_repeater', array(
        'default' => json_encode( array() ),
        'sanitize_callback' => function( $input ) {
            $arr = json_decode( $input, true );
            return json_encode( is_array( $arr ) ? array_map( 'absint', $arr ) : array() );
        },
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new My_Portfolio_Projects_Repeater_Control( $wp_customize, 'home_projects_repeater', array(
        'label' => __( 'Select Projects to Display', 'my-portfolio' ),
        'section' => 'home_projects_section',
        'settings' => 'home_projects_repeater',
    ) ) );
}, 10 ); 