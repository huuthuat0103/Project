<?php
if ( ! class_exists( 'TITI_Theme_Options' ) ) {
    class TITI_Theme_Options {
        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;
        public function __construct() {
            if ( ! class_exists( 'ReduxFramework' ) ) {
                return;
            }
                // This is needed. Bah WordPress bugs.  ;)
            if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                $this->initSettings();
            } else {
                add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
            }
        }
        public function initSettings() {
            $this->setArguments();
            $this->setHelpTabs();
            $this->setSections();
                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }
                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }
            public function setSections() {
                $this->sections[] = array(
                    'title'  => __( 'Cài đặt website', 'TITI' ),
                    'desc'   => __( 'Tùy chỉnh chung của website', 'TITI' ),
                    'icon' => 'el el-dashboard',
                    'fields' => array(
                      array(
                        'id'       => 'logo',
                        'type'     => 'media',
                        'title'    => __( 'Tùy chọn logo', 'TITI' ),
                        'compiler' => 'true',
                        'desc'     => __( 'Cho phép dùng đuôi: jpg, png, gif', 'TITI' ),
                        ),
                      array(
                       'id' => 'section2-start',
                       'type' => 'section',
                       'title' => __('Thông tin liên hệ', 'TITI'),
                       'indent' => true 
                       ),
                      array(
                        'id'       => 'name_co',
                        'type'     => 'text',
                        'title'    => __( 'Tên công ty', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'add_co',
                        'type'     => 'text',
                        'title'    => __( 'Địa chỉ', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'tel_co',
                        'type'     => 'text',
                        'title'    => __( 'Điện thoại', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'hotline',
                        'type'     => 'text',
                        'title'    => __( 'Hotline', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'fax_co',
                        'type'     => 'text',
                        'title'    => __( 'Fax', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'email_co',
                        'type'     => 'text',
                        'title'    => __( 'Email', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'copyr_co',
                        'type'     => 'text',
                        'title'    => __( 'Copyright', 'TITI' ),
                        'compiler' => 'true',
                        ),

                      array(
                       'id' => 'section3-start',
                       'type' => 'section',
                       'title' => __('Liên kết với mạng xã hội', 'TITI'),
                       'subtitle'     => __( 'Nhập full link mạng xã hội vào từng khu vực!', 'TITI' ),
                       'indent' => true 
                       ),
                      array(
                        'id'       => 'ss_fb',
                        'type'     => 'text',
                        'title'    => __( 'Facebook', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_twt',
                        'type'     => 'text',
                        'title'    => __( 'Twitter', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_ytb',
                        'type'     => 'text',
                        'title'    => __( 'Youtube', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_gg',
                        'type'     => 'text',
                        'title'    => __( 'Google+', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_linkedin',
                        'type'     => 'text',
                        'title'    => __( 'Linkedin', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_slideshare',
                        'type'     => 'text',
                        'title'    => __( 'Slideshare', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_pinterest',
                        'type'     => 'text',
                        'title'    => __( 'Pinterest', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'ss_instagram',
                        'type'     => 'text',
                        'title'    => __( 'Instagram', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'map_key',
                        'type'     => 'text',
                        'title'    => __( 'Map Key', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'map_lat',
                        'type'     => 'text',
                        'title'    => __( 'Map Lat', 'TITI' ),
                        'compiler' => 'true',
                        ),
                      array(
                        'id'       => 'map_lng',
                        'type'     => 'text',
                        'title'    => __( 'Map Lng', 'TITI' ),
                        'compiler' => 'true',
                        ),

                      // array(
                      //  'id' => 'section-start',
                      //  'type' => 'section',
                      //  'title' => __('Tùy chọn các chức năng khác', 'TITI'),
                      //  'indent' => true 
                      //  ),
                      // array(
                      //   'id'       => 'check',
                      //   'type'     => 'checkbox',
                      //   'title'    => __('Ẩn các Menu không cần thiết', 'TITI'), 
                      //   'subtitle' => __('Tích chọn các menu muốn ẩn', 'TITI'),
                      //   'options'  => array(
                      //       '1' => 'Menu Media',
                      //       '2' => 'Menu Comments',
                      //       '3' => 'Menu Contact',
                      //       '4' => 'Menu Appearance (Theme)',
                      //       '5' => 'Menu Plugins',
                      //       '6' => 'Menu User',
                      //       '7' => 'Menu Tools',
                      //       '8' => 'Menu Settings',
                      //       '9' => 'Menu Seo',
                      //       '10' => 'Menu Types'
                      //       )
                      //   ),
                      // array(
                      //   'id'       => 'hidetuyetroi',
                      //   'type'     => 'switch', 
                      //   'title'    => __('Ẩn hiệu ứng tuyết rơi', 'TITI'),
                      //   'subtitle' => __('Ẩn hiệu ứng tuyết rơi trên trang chủ', 'TITI'),
                      //   'default'  => true,
                      //   'on'       =>'Hiện',
                      //   'off'      =>'Ẩn'
                      //   ),
                      // array(
                      //   'id'       => 'hidephone',
                      //   'type'     => 'switch', 
                      //   'title'    => __('Ẩn Phone Rung', 'TITI'),
                      //   'subtitle' => __('Ẩn hoặc hiện Phone Rung trên trang chủ', 'TITI'),
                      //   'default'  => true,
                      //   'on'       =>'Hiện',
                      //   'off'      =>'Ẩn'
                      //   ),
                      // array(

                      //   'id'       => 'hidemenu',
                      //   'type'     => 'switch', 
                      //   'title'    => __('Ẩn thanh điều kiển', 'TITI'),
                      //   'subtitle' => __('Ản thanh điều kiển admin ngoài front end khi đã đăng nhập.', 'TITI'),
                      //   'default'  => true,
                      //   'on'       =>'Ẩn',
                      //   'off'      =>'Hiện'
                      //   ),
                      array(
                        'id'     => 'section-end',
                        'type'   => 'section',
                        'indent' => false,
                        ),
                      )
);

// $this->sections[] = array(
//     'title'  => __( 'Khu vực khác', 'TITI' ),
//     'desc'   => __( 'Tùy chỉnh chung của website', 'TITI' ),
//     'icon' => 'el-icon-font',
//     'fields' => array(
//       array(
//         'id'       => 'logo2',
//         'type'     => 'media',
//         'title'    => __( 'Tùy chọn logo', 'TITI' ),
//         'compiler' => 'true',
//         'desc'     => __( 'Cho phép dùng đuôi: jpg, png, gif', 'TITI' ),
//         ),
      
//       )
//     );


}
public function setHelpTabs() {
                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
    $this->args['help_tabs'][] = array(
        'id'      => 'redux-help-tab-1',
        'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        );
    $this->args['help_tabs'][] = array(
        'id'      => 'redux-help-tab-2',
        'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        );
                // Set the help sidebar
    $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
}
            /**

             * All the possible arguments for Redux.

             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

             * */
            public function setArguments() {
                $theme = wp_get_theme(); // For use with some settings. Not necessary.
                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'titi_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Tùy chỉnh', 'redux-framework-demo' ),
                    'page_title'         => __( 'Tùy chỉnh', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module
                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => false,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support
                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => 'titi_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.
                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE
                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                            ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                            ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                                ),

                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                                ),
                            ),
                        )
);
                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

$this->args['share_icons'][] = array(
    'url'   => 'https://www.facebook.com/mrkenni',
    'title' => 'Like us on Facebook',
    'icon'  => 'el el-facebook'
    );

$this->args['share_icons'][] = array(
    'url'   => 'http://twitter.com/mrkenni',
    'title' => 'Follow us on Twitter',
    'icon'  => 'el el-twitter'
    );
$this->args['share_icons'][] = array(
    'url'   => 'http://www.linkedin.com/mrkenni',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin'
    );
                // Panel Intro text -> before the form
if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
    if ( ! empty( $this->args['global_variable'] ) ) {
        $v = $this->args['global_variable'];
    } else {

        $v = str_replace( '-', '_', $this->args['opt_name'] );

    }
    $this->args['intro_text'] = sprintf( __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' ), $v );
} else {

    $this->args['intro_text'] = __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' );
}
}
}
global $reduxConfig;
$reduxConfig = new TITI_Theme_Options();
}