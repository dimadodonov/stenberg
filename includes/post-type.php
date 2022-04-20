<?php
if ( ! defined( 'ABSPATH')) {
    exit;
}

if ( ! function_exists( 'projects_post_type' ) ) {

	// Register Custom Post Type
	function projects_post_type() {

		$labels = array(
			'name'                  => _x( 'Проекты', 'Post Type General Name', 'mitroliti' ),
			'singular_name'         => _x( 'Проекты', 'Post Type Singular Name', 'mitroliti' ),
			'menu_name'             => __( 'Проекты', 'mitroliti' ),
			'name_admin_bar'        => __( 'Работу в проекты', 'mitroliti' ),
			'archives'              => __( 'Item Archives', 'mitroliti' ),
			'parent_item_colon'     => __( 'Parent Item:', 'mitroliti' ),
			'all_items'             => __( 'Все проекты', 'mitroliti' ),
			'add_new_item'          => __( 'Добавить новый проект', 'mitroliti' ),
			'add_new'               => __( 'Добавить проект', 'mitroliti' ),
			'new_item'              => __( 'Новый проект', 'mitroliti' ),
			'edit_item'             => __( 'Редактировать проект', 'mitroliti' ),
			'update_item'           => __( 'Обновить проект', 'mitroliti' ),
			'view_item'             => __( 'Посмотреть проект', 'mitroliti' ),
			'search_items'          => __( 'Поиск проекта', 'mitroliti' ),
			'not_found'             => __( 'Не найден', 'mitroliti' ),
			'not_found_in_trash'    => __( 'Проектов корзине не найдено', 'mitroliti' )
		);

		$args = array(
			'label'                 => __( 'Проекты', 'mitroliti' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			// 'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-screenoptions',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
			'show_in_rest'          => true,
		);
		
		register_post_type( 'projects', $args );

	}

	add_action( 'init', 'projects_post_type', 0 );

}

if ( ! function_exists( 'projects_cat' ) ) {

	// Register Custom Taxonomy
	function projects_cat() {

		$labels = array(
			'name'                       => _x( 'Категории работ', 'Taxonomy General Name', 'mitroliti' ),
			'singular_name'              => _x( 'Категория работы', 'Taxonomy Singular Name', 'mitroliti' ),
			'menu_name'                  => __( 'Категории', 'mitroliti' ),
			'all_items'                  => __( 'Все категории', 'mitroliti' ),
			'parent_item'                => __( 'Родительская категория', 'mitroliti' ),
			'parent_item_colon'          => __( 'Родительская категория:', 'mitroliti' ),
			'new_item_name'              => __( 'Название новой категории', 'mitroliti' ),
			'add_new_item'               => __( 'Добавить категорию', 'mitroliti' ),
			'edit_item'                  => __( 'Изменить категорию', 'mitroliti' ),
			'update_item'                => __( 'Обновить категорию', 'mitroliti' ),
			'view_item'                  => __( 'Посмотреть категорию', 'mitroliti' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'mitroliti' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'mitroliti' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'mitroliti' ),
			'popular_items'              => __( 'Popular Items', 'mitroliti' ),
			'search_items'               => __( 'Search Items', 'mitroliti' ),
			'not_found'                  => __( 'Not Found', 'mitroliti' ),
			'no_terms'                   => __( 'No items', 'mitroliti' ),
			'items_list'                 => __( 'Items list', 'mitroliti' ),
			'items_list_navigation'      => __( 'Items list navigation', 'mitroliti' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'projects_cat', array( 'projects' ), $args );

	}

	add_action( 'init', 'projects_cat', 0 );

}



if ( ! function_exists( 'colors_post_type' ) ) {

	// Register Custom Post Type
	function colors_post_type() {

		$labels = array(
			'name'                  => _x( 'Цвет панелей', 'Post Type General Name', 'mitroliti' ),
			'singular_name'         => _x( 'Цвет панелей', 'Post Type Singular Name', 'mitroliti' ),
			'menu_name'             => __( 'Цвет панелей', 'mitroliti' ),
			'name_admin_bar'        => __( 'Цвет', 'mitroliti' ),
			'archives'              => __( 'Item Archives', 'mitroliti' ),
			'parent_item_colon'     => __( 'Parent Item:', 'mitroliti' ),
			'all_items'             => __( 'Все цвета', 'mitroliti' ),
			'add_new_item'          => __( 'Добавить новый цвет', 'mitroliti' ),
			'add_new'               => __( 'Добавить цвет', 'mitroliti' ),
			'new_item'              => __( 'Новый цвет', 'mitroliti' ),
			'edit_item'             => __( 'Редактировать цвет', 'mitroliti' ),
			'update_item'           => __( 'Обновить цвет', 'mitroliti' ),
			'view_item'             => __( 'Посмотреть цвет', 'mitroliti' ),
			'search_items'          => __( 'Поиск цвета', 'mitroliti' ),
			'not_found'             => __( 'Не найден', 'mitroliti' ),
			'not_found_in_trash'    => __( 'Цветов корзине не найдено', 'mitroliti' )
		);

		$args = array(
			'label'                 => __( 'Цвет панелей', 'mitroliti' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			// 'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-admin-appearance',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
			'show_in_rest'          => true,
		);
		
		register_post_type( 'panel_colors', $args );

	}

	add_action( 'init', 'colors_post_type', 0 );

}

/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'projects'; // change to your post type
	$taxonomy  = 'projects_cat'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( '%s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}

/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'projects'; // change to your post type
	$taxonomy  = 'projects_cat'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}