<?php 
	global $titi_options; 
	require_once dirname( __FILE__ ) . '/disable-updates.php';
	if ($titi_options[hidemenu]==1){ 
		add_filter('show_admin_bar', '__return_false');
	}
	add_action('wp_dashboard_setup', 'remove_redux_dashboard');
	function remove_redux_dashboard() {
        remove_meta_box('redux_dashboard_widget', 'dashboard', 'side', 'high');
        remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side', 'high');
	}
	add_action('admin_init', 'rw_remove_dashboard_widgets');
    function rw_remove_dashboard_widgets() {
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // right now
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');// WP 3.8
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // recent comments
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // incoming links
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // plugins
        remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // quick press
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // recent drafts
        remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // wordpress blog
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // other wordpress news
	}
	function remove_admin_bar_links() {
    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('wp-logo');          /** Remove the WordPress logo **/
	    $wp_admin_bar->remove_menu('about');            /** Remove the about WordPress link **/
	    $wp_admin_bar->remove_menu('wporg');            /** Remove the WordPress.org link **/
	    $wp_admin_bar->remove_menu('documentation');    /** Remove the WordPress documentation link **/
	    $wp_admin_bar->remove_menu('support-forums');   /** Remove the support forums link **/
	    $wp_admin_bar->remove_menu('feedback');         /** Remove the feedback link **/
	    //$wp_admin_bar->remove_menu('site-name');      /** Remove the site name menu **/
	    $wp_admin_bar->remove_menu('view-site');        /** Remove the view site link **/
	    $wp_admin_bar->remove_menu('wpseo-menu');        /** Remove the view site link **/
	    $wp_admin_bar->remove_menu('updates');          /** Remove the updates link **/
	    $wp_admin_bar->remove_menu('comments');         /** Remove the comments link **/
	    $wp_admin_bar->remove_menu('new-content');      /** Remove the content link **/
	    $wp_admin_bar->remove_menu('w3tc');             /** If you use w3 total cache remove the performance link **/
	    //$wp_admin_bar->remove_menu('my-account');     /** Remove the user details tab **/
	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
	add_action( 'admin_menu', 'my_remove_menus', 999 );
	function my_remove_menus() {
		global $titi_options; 
		if ($titi_options[check][1]==1){ remove_menu_page( 'upload.php' );}
		if ($titi_options[check][2]==1){ remove_menu_page( 'edit-comments.php' );}
		if ($titi_options[check][3]==1){ remove_menu_page( 'wpcf7' );}
		if ($titi_options[check][4]==1){ remove_menu_page( 'themes.php' );}
		if ($titi_options[check][5]==1){ remove_menu_page( 'plugins.php' );}
		if ($titi_options[check][6]==1){ remove_menu_page( 'users.php' );}
		if ($titi_options[check][7]==1){ remove_menu_page( 'tools.php' );}
		if ($titi_options[check][8]==1){ remove_menu_page( 'options-general.php' );}
		if ($titi_options[check][9]==1){ remove_menu_page( 'wpseo_dashboard' );}
		if ($titi_options[check][10]==1){ remove_menu_page( 'wpcf' );}
		remove_submenu_page( 'themes.php', 'theme-editor.php' );
		remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
		remove_menu_page( 'searchandfilter-settings');
		// remove_submenu_page( 'options-general.php', 'options-writing.php' );
		// remove_submenu_page( 'options-general.php', 'options-discussion.php' );
		// remove_submenu_page( 'options-general.php', 'options-reading.php' );
		// remove_submenu_page( 'options-general.php', 'options-media.php' );
		// remove_submenu_page( 'options-general.php', 'options-permalink.php' );
		remove_menu_page( 'Woocommerce-social-media-share-button-plugin' );
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'upload.php' );
		// remove_menu_page( 'wpcf7'); 
		remove_menu_page( 'bhittani_plugin_kksr_settings'); 
		remove_menu_page( 'oa-social-sharing-icons_setup'); 
		remove_menu_page( 'duplicator'); 
		// remove_menu_page( 'wpseo_dashboard'); 
		// remove_menu_page( 'wpcf'); 
		remove_menu_page( 'eti_easy_tax_images'); 
		remove_submenu_page( 'options-general.php', 'wp-social-sharing' );
	}

	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
	function load_custom_wp_admin_style(){
	    wp_enqueue_style( 'admin_css', get_bloginfo('template_directory'). '/core/admin/style-admin.css' );
	}

	add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
    function my_custom_dashboard_widgets() {
        global $wp_meta_boxes;
        wp_add_dashboard_widget('custom_help_widget', 'Giới thiệu', 'custom_dashboard_help');
    }
     function custom_dashboard_help() { ?>
	    <h2>Chào mừng đến với Hệ thống Quản Trị Website</h2>
	    <p style="display:block;text-align:center"><img src="<?php echo get_bloginfo('template_directory')?>/core/admin/logo.png" alt=""></p>
	    <p><strong>THÔNG TIN WEBSITE</strong></p>
	    <P><?php echo bloginfo( 'name' ); ?></p>
	    <p><strong>NHÀ PHÁT TRIỂN</strong></p>
	    <p>Hệ thống được phát triển và bảo hành bởi <a target="_blank" href="https://www.izway.vn"><strong>IZWAY</strong></a></p>
	    <p>Mọi yêu cầu, hỗ trợ quý khách hàng có thể liên hệ <strong>0935.19.19.02</strong></p>
	    <p><strong>Email</strong>: <a href="mailto:info@izway.vn?Subject=Contact" target="_top">info@izway.vn</a> - <strong>Website</strong>: <a target="_blank" href="https://www.izway.vn"><strong>https://www.izway.vn</strong></a></p> 
	    <p><strong>Cảm ơn quý khách đã tin tưởng và sử dụng sản phẩm của chúng tôi.</strong></p>
	<?php }
	// XOA WELLCOME WP
	remove_action('welcome_panel', 'wp_welcome_panel');
	// function st_welcome_panel() {
	// 	echo
	// 	'<div class="welcome-panel-content">'
	// 	.'<h3>Your Welcome Title</h3>'
	// 	.'</div>';
	// }
	// add_action('welcome_panel','st_welcome_panel');



    add_filter('admin_title', 'my_admin_title', 10, 2);
	function my_admin_title($admin_title, $title){
	    return $title.' &lsaquo; '.get_bloginfo('name').' &lsaquo; '.'';
	}

	/** Footer **/
	function remove_footer_admin () {
	    echo '';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');

	function login_css() {
    wp_enqueue_style( 'login_css', get_bloginfo('template_directory'). '/core/admin/login.css' );
	}
	add_action('login_head', 'login_css');

	add_action( 'widgets_init', 'my_unregister_widgets' );
	function my_unregister_widgets() {
	    unregister_widget('WP_Widget_Pages');
	    unregister_widget('WP_Widget_Calendar');
	    unregister_widget('WP_Widget_Archives');
	    unregister_widget('WP_Widget_Links');
	    unregister_widget('WP_Widget_Meta');
	    unregister_widget('WP_Widget_Search');
	    unregister_widget('WP_Widget_Categories');
	    unregister_widget('WP_Widget_Recent_Posts');
	    unregister_widget('WP_Widget_Recent_Comments');
	    unregister_widget('WP_Widget_RSS');
	    unregister_widget('WP_Widget_Tag_Cloud');
	    unregister_widget('WP_Nav_Menu_Widget');
	}
?>