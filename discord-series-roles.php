<?php
/*
 * Plugin Name: Series Discord Roles
 * Plugin URI: https://github.com/superyassh
 * Description: Add Discord Series Roles
 * Version: 1.0.0
 * Author: Superyassh
 * Author twitter: @superyassh
*/
 
add_action( 'init', 'discord_roles' );
function discord_roles() {
	$args = [
		'label'  => esc_html__( 'Discord Roles', '' ),
		'labels' => [
			'menu_name'                  => esc_html__( 'Discord Roles', '' ),
			'all_items'                  => esc_html__( 'All Discord Roles', '' ),
			'edit_item'                  => esc_html__( 'Edit Discord Role', '' ),
			'view_item'                  => esc_html__( 'View Discord Role', '' ),
			'update_item'                => esc_html__( 'Update Discord Role', '' ),
			'add_new_item'               => esc_html__( 'Add new Discord Role', '' ),
			'new_item'                   => esc_html__( 'New Discord Role', '' ),
			'parent_item'                => esc_html__( 'Parent Discord Role', '' ),
			'parent_item_colon'          => esc_html__( 'Parent Discord Role', '' ),
			'search_items'               => esc_html__( 'Search Discord Roles', '' ),
			'popular_items'              => esc_html__( 'Popular Discord Roles', '' ),
			'separate_items_with_commas' => esc_html__( 'Separate Discord Roles with commas', '' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove Discord Roles', '' ),
			'choose_from_most_used'      => esc_html__( 'Choose most used Discord Roles', '' ),
			'not_found'                  => esc_html__( 'No Discord Roles found', '' ),
			'name'                       => esc_html__( 'Discord Roles', '' ),
			'singular_name'              => esc_html__( 'Discord Role', '' ),
		],
		'public'               => true,
		'show_ui'              => true,
		'show_in_menu'         => true,
		'show_in_nav_menus'    => true,
		'show_tagcloud'        => true,
		'show_in_quick_edit'   => true,
		'show_admin_column'    => false,
		'show_in_rest'         => true,
		'hierarchical'         => true,
		'query_var'            => true,
		'sort'                 => false,
		'rewrite_no_front'     => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true
	];
	register_taxonomy( 'discord-role', [ 'post' ], $args );
}