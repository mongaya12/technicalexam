<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Veterinary Services', 'Post Type General Name', 'universityanimalclinic' ),
		'singular_name'         => _x( 'Veterinary Service', 'Post Type Singular Name', 'universityanimalclinic' ),
		'menu_name'             => __( 'Veterinary Services', 'universityanimalclinic' ),
		'name_admin_bar'        => __( 'Veterinary Services', 'universityanimalclinic' ),
		'archives'              => __( 'Veterinary Services', 'universityanimalclinic' ),
		'attributes'            => __( 'Veterinary Services', 'universityanimalclinic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'universityanimalclinic' ),
		'all_items'             => __( 'All Veterinary Services', 'universityanimalclinic' ),
		'add_new_item'          => __( 'Add New Veterinary Services', 'universityanimalclinic' ),
		'add_new'               => __( 'Add Veterinary Services', 'universityanimalclinic' ),
		'new_item'              => __( 'New Veterinary Services', 'universityanimalclinic' ),
		'edit_item'             => __( 'Edit Veterinary Services', 'universityanimalclinic' ),
		'update_item'           => __( 'Update Veterinary Services', 'universityanimalclinic' ),
		'view_item'             => __( 'View Veterinary Services', 'universityanimalclinic' ),
		'view_items'            => __( 'View Veterinary Services', 'universityanimalclinic' ),
		'search_items'          => __( 'Search Veterinary Services', 'universityanimalclinic' ),
		'not_found'             => __( 'Not found', 'universityanimalclinic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'universityanimalclinic' ),
		'featured_image'        => __( 'Featured Image', 'universityanimalclinic' ),
		'set_featured_image'    => __( 'Set featured image', 'universityanimalclinic' ),
		'remove_featured_image' => __( 'Remove featured image', 'universityanimalclinic' ),
		'use_featured_image'    => __( 'Use as featured image', 'universityanimalclinic' ),
		'insert_into_item'      => __( 'Insert into item', 'universityanimalclinic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'universityanimalclinic' ),
		'items_list'            => __( 'Items list', 'universityanimalclinic' ),
		'items_list_navigation' => __( 'Items list navigation', 'universityanimalclinic' ),
		'filter_items_list'     => __( 'Filter items list', 'universityanimalclinic' ),
	);
	$args = array(
		'label'                 => __( 'Veterinary Services', 'universityanimalclinic' ),
		'description'           => __( 'Veterinary Services Description', 'universityanimalclinic' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
    register_post_type( 'veterinary-services', $args );
    
    $labels_team = array(
		'name'                  => _x( 'Our Team', 'Post Type General Name', 'universityanimalclinic' ),
		'singular_name'         => _x( 'Our Team', 'Post Type Singular Name', 'universityanimalclinic' ),
		'menu_name'             => __( 'Our Team', 'universityanimalclinic' ),
		'name_admin_bar'        => __( 'Our Team', 'universityanimalclinic' ),
		'archives'              => __( 'Our Team', 'universityanimalclinic' ),
		'attributes'            => __( 'Our Team', 'universityanimalclinic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'universityanimalclinic' ),
		'all_items'             => __( 'All Our Team', 'universityanimalclinic' ),
		'add_new_item'          => __( 'Add New Our Team', 'universityanimalclinic' ),
		'add_new'               => __( 'Add Our Team', 'universityanimalclinic' ),
		'new_item'              => __( 'New Our Team', 'universityanimalclinic' ),
		'edit_item'             => __( 'Edit Our Team', 'universityanimalclinic' ),
		'update_item'           => __( 'Update Our Team', 'universityanimalclinic' ),
		'view_item'             => __( 'View Our Team', 'universityanimalclinic' ),
		'view_items'            => __( 'View Our Team', 'universityanimalclinic' ),
		'search_items'          => __( 'Search Our Team', 'universityanimalclinic' ),
		'not_found'             => __( 'Not found', 'universityanimalclinic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'universityanimalclinic' ),
		'featured_image'        => __( 'Featured Image', 'universityanimalclinic' ),
		'set_featured_image'    => __( 'Set featured image', 'universityanimalclinic' ),
		'remove_featured_image' => __( 'Remove featured image', 'universityanimalclinic' ),
		'use_featured_image'    => __( 'Use as featured image', 'universityanimalclinic' ),
		'insert_into_item'      => __( 'Insert into item', 'universityanimalclinic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'universityanimalclinic' ),
		'items_list'            => __( 'Items list', 'universityanimalclinic' ),
		'items_list_navigation' => __( 'Items list navigation', 'universityanimalclinic' ),
		'filter_items_list'     => __( 'Filter items list', 'universityanimalclinic' ),
	);
	$args_team = array(
		'label'                 => __( 'Our Team', 'universityanimalclinic' ),
		'description'           => __( 'Our Team Description', 'universityanimalclinic' ),
		'labels'                => $labels_team,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
    register_post_type( 'our-team', $args_team );
    
    $labels_fun_fact = array(
		'name'                  => _x( 'Fun Facts', 'Post Type General Name', 'universityanimalclinic' ),
		'singular_name'         => _x( 'Fun Fact', 'Post Type Singular Name', 'universityanimalclinic' ),
		'menu_name'             => __( 'Fun Facts', 'universityanimalclinic' ),
		'name_admin_bar'        => __( 'Fun Fact', 'universityanimalclinic' ),
		'archives'              => __( 'Fun Fact', 'universityanimalclinic' ),
		'attributes'            => __( 'Fun Fact', 'universityanimalclinic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'universityanimalclinic' ),
		'all_items'             => __( 'All Fun Facts', 'universityanimalclinic' ),
		'add_new_item'          => __( 'Add New Fun Fact', 'universityanimalclinic' ),
		'add_new'               => __( 'Add Fun Fact', 'universityanimalclinic' ),
		'new_item'              => __( 'New Fun Fact', 'universityanimalclinic' ),
		'edit_item'             => __( 'Edit Fun Fact', 'universityanimalclinic' ),
		'update_item'           => __( 'Update Fun Fact', 'universityanimalclinic' ),
		'view_item'             => __( 'View Fun Facts', 'universityanimalclinic' ),
		'view_items'            => __( 'View Fun Facts', 'universityanimalclinic' ),
		'search_items'          => __( 'Search Fun Facts', 'universityanimalclinic' ),
		'not_found'             => __( 'Not found', 'universityanimalclinic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'universityanimalclinic' ),
		'featured_image'        => __( 'Featured Image', 'universityanimalclinic' ),
		'set_featured_image'    => __( 'Set featured image', 'universityanimalclinic' ),
		'remove_featured_image' => __( 'Remove featured image', 'universityanimalclinic' ),
		'use_featured_image'    => __( 'Use as featured image', 'universityanimalclinic' ),
		'insert_into_item'      => __( 'Insert into item', 'universityanimalclinic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'universityanimalclinic' ),
		'items_list'            => __( 'Items list', 'universityanimalclinic' ),
		'items_list_navigation' => __( 'Items list navigation', 'universityanimalclinic' ),
		'filter_items_list'     => __( 'Filter items list', 'universityanimalclinic' ),
	);
	$args_fun_fact = array(
		'label'                 => __( 'Fun Facts', 'universityanimalclinic' ),
		'description'           => __( 'Fun Facts Description', 'universityanimalclinic' ),
		'labels'                => $labels_fun_fact,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'fun-facts', $args_fun_fact );

	$labels_testimonials = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'universityanimalclinic' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'universityanimalclinic' ),
		'menu_name'             => __( 'Testimonials', 'universityanimalclinic' ),
		'name_admin_bar'        => __( 'Testimonial', 'universityanimalclinic' ),
		'archives'              => __( 'Testimonial', 'universityanimalclinic' ),
		'attributes'            => __( 'Testimonial', 'universityanimalclinic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'universityanimalclinic' ),
		'all_items'             => __( 'All Testimonials', 'universityanimalclinic' ),
		'add_new_item'          => __( 'Add Testimonial', 'universityanimalclinic' ),
		'add_new'               => __( 'Add Testimonial', 'universityanimalclinic' ),
		'new_item'              => __( 'New Testimonial', 'universityanimalclinic' ),
		'edit_item'             => __( 'Edit Testimonial', 'universityanimalclinic' ),
		'update_item'           => __( 'Update Testimonial', 'universityanimalclinic' ),
		'view_item'             => __( 'View Testimonials', 'universityanimalclinic' ),
		'view_items'            => __( 'View Testimonials', 'universityanimalclinic' ),
		'search_items'          => __( 'Search Testimonial', 'universityanimalclinic' ),
		'not_found'             => __( 'Not found', 'universityanimalclinic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'universityanimalclinic' ),
		'featured_image'        => __( 'Featured Image', 'universityanimalclinic' ),
		'set_featured_image'    => __( 'Set featured image', 'universityanimalclinic' ),
		'remove_featured_image' => __( 'Remove featured image', 'universityanimalclinic' ),
		'use_featured_image'    => __( 'Use as featured image', 'universityanimalclinic' ),
		'insert_into_item'      => __( 'Insert into item', 'universityanimalclinic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'universityanimalclinic' ),
		'items_list'            => __( 'Items list', 'universityanimalclinic' ),
		'items_list_navigation' => __( 'Items list navigation', 'universityanimalclinic' ),
		'filter_items_list'     => __( 'Filter items list', 'universityanimalclinic' ),
	);
	$args_testimonials = array(
		'label'                 => __( 'Testimonials', 'universityanimalclinic' ),
		'description'           => __( 'Testimonial', 'universityanimalclinic' ),
		'labels'                => $labels_testimonials,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args_testimonials );

}
add_action( 'init', 'custom_post_type', 0 );