<?php
/**
* Custom Post Types
*
* Defines all custom post types and custom taxonomies
*
* @package EducationNC
*/

function add_custom_post_types() {
	// register_post_type( 'feature',
	// 	array('labels' => array(
	// 		'name' => 'Features',
	// 		'singular_name' => 'Feature',
	// 		'add_new' => 'Add New',
	// 		'add_new_item' => 'Add New Feature',
	// 		'edit' => 'Edit',
	// 		'edit_item' => 'Edit Feature',
	// 		'new_item' => 'New Feature',
	// 		'view_item' => 'View Feature',
	// 		'search_items' => 'Search Feature',
	// 		'not_found' =>  'Nothing found in the Database.',
	// 		'not_found_in_trash' => 'Nothing found in Trash',
	// 		'parent_item_colon' => ''
	// 	), /* end of arrays */
	// 	'public' => true,
	// 	'exclude_from_search' => false,
	// 	'publicly_queryable' => true,
	// 	'show_ui' => true,
	// 	'show_in_nav_menus' => false,
	// 	'menu_position' => 8,
	// 	//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
	// 	'capability_type' => 'post',
	// 	'hierarchical' => false,
	// 	'supports' => array( 'title', 'editor', 'revisions', 'comments', 'trackbacks'),
	// 	'has_archive' => false,
	// 	'rewrite' => true,
	// 	'query_var' => true
	// )
	// );

	register_post_type( 'underwriter',
		array('labels' => array(
				'name' => 'Underwriters',
				'singular_name' => 'Underwriter',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Underwriter',
				'edit' => 'Edit',
				'edit_item' => 'Edit Underwriter',
				'new_item' => 'New Underwriter',
				'view_item' => 'View Underwriter',
				'search_items' => 'Search Underwriter',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => false,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'revisions'),
			'has_archive' => false,
			'rewrite' => false,
			'query_var' => true
	 	)
	);

	register_post_type( 'gallery',
		array('labels' => array(
				'name' => 'Galleries',
				'singular_name' => 'Gallery',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Gallery',
				'edit' => 'Edit',
				'edit_item' => 'Edit Gallery',
				'new_item' => 'New Gallery',
				'view_item' => 'View Gallery',
				'search_items' => 'Search Gallery',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'revisions'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
		)
	);

	register_post_type( 'ednews',
		array('labels' => array(
				'name' => 'EdNews',
				'singular_name' => 'EdNews',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New EdNews',
				'edit' => 'Edit',
				'edit_item' => 'Edit EdNews',
				'new_item' => 'New EdNews',
				'view_item' => 'View EdNews',
				'search_items' => 'Search EdNews',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'revisions'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
		)
	);

	register_post_type( 'district',
		array('labels' => array(
				'name' => 'Districts',
				'singular_name' => 'District',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New District',
				'edit' => 'Edit',
				'edit_item' => 'Edit District',
				'new_item' => 'New District',
				'view_item' => 'View District',
				'search_items' => 'Search District',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'revisions', 'thumbnail'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
		)
	);

	register_post_type( 'bio',
		array('labels' => array(
				'name' => 'Bios',
				'singular_name' => 'Bio',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Bio',
				'edit' => 'Edit',
				'edit_item' => 'Edit Bio',
				'new_item' => 'New Bio',
				'view_item' => 'View Bio',
				'search_items' => 'Search Bio',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'revisions', 'thumbnail', 'page-attributes'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
		)
	);

	register_post_type( 'map',
		array('labels' => array(
				'name' => 'Maps',
				'singular_name' => 'Map',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Map',
				'edit' => 'Edit',
				'edit_item' => 'Edit Map',
				'new_item' => 'New Map',
				'view_item' => 'View Map',
				'search_items' => 'Search Map',
				'not_found' =>  'Nothing found in the Database.',
				'not_found_in_trash' => 'Nothing found in Trash',
				'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 8,
			//'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'author', 'revisions', 'thumbnail', 'comments'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
		)
	);
}
add_action( 'init', 'add_custom_post_types');


register_taxonomy( 'district-type',
array('district'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
array('hierarchical' => true,     /* if this is true it acts like categories */
'labels' => array(
	'name' => 'District Types', /* name of the custom taxonomy */
	'singular_name' => 'District Type', /* single taxonomy name */
	'search_items' =>  'Search District Types', /* search title for taxomony */
	'all_items' => 'All District Types',  /*all title for taxonomies */
	'parent_item' => 'Parent District Type', /* parent title for taxonomy */
	'parent_item_colon' => 'Parent District Type:', /* parent taxonomy title */
	'edit_item' => 'Edit District Type', /* edit custom taxonomy title */
	'update_item' => 'Update District Type', /* update title for taxonomy */
	'add_new_item' => 'Add New District Type', /* add new title for taxonomy */
	'new_item_name' => 'New District Type Name' /* name title for taxonomy */
),
'show_ui' => true,
'query_var' => true,
'public' => false
)
);

register_taxonomy( 'author-type',
	array('bio'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true it acts like categories */
		'labels' => array(
			'name' => 'Author Types', /* name of the custom taxonomy */
			'singular_name' => 'Author Type', /* single taxonomy name */
			'search_items' =>  'Search Author Types', /* search title for taxomony */
			'all_items' => 'All Author Types',  /*all title for taxonomies */
			'parent_item' => 'Parent Author Type', /* parent title for taxonomy */
			'parent_item_colon' => 'Parent Author Type:', /* parent taxonomy title */
			'edit_item' => 'Edit Author Type', /* edit custom taxonomy title */
			'update_item' => 'Update Author Type', /* update title for taxonomy */
			'add_new_item' => 'Add New Author Type', /* add new title for taxonomy */
			'new_item_name' => 'New Author Type Name' /* name title for taxonomy */
		),
		'show_ui' => true,
		'query_var' => true,
		'public' => false
	)
);

// Order bios by menu order on admin page
function ednc_bios_admin_orderby( $vars ) {
	if ( isset( $vars['post_type']) && $vars['post_type'] == 'bio' && !isset( $vars['orderby'] ) ) {

		$vars = array_merge( $vars, array(
			'orderby' => 'menu_order',
			'order' => 'ASC'
		));
	}

	return $vars;
}
add_filter( 'request', 'ednc_bios_admin_orderby' );
