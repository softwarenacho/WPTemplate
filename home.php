<?php 
	/*
	Template Name: 	iVoy Custom
	Description: 	Min Template for iVoy
	Author:			iVoy IT Team
	Version:		0.0.1
	*/
	$post = $wp_query->post;
	$layout = get_post_meta($post->ID, 'page_layout', true);
	$page_width = get_post_meta($post->ID, 'page_width', true);
	if(!$page_width) $page_width = 'content';
	get_header();
?>


<div class="single-post post blog page-holder page-layout-<?php echo esc_attr($layout); ?>">

	<?php 		
		
		if($page_width != 'fullwidth') {
			echo '<div class="inner clearfix">';
		}
		if($layout != "fullwidth") {
			echo '<div class="page_inner">';
		}

		if (is_front_page()) {
			get_front_page();
		}

		if (have_posts()) : while (have_posts()) : the_post(); 
			the_content(); 
		endwhile; endif;  
	
		if($layout != "fullwidth") { 
			echo '</div>';
			get_sidebar();    	
		}
		if($page_width != 'fullwidth') {
			echo '</div>';
		}

	?>

</div>

<?php get_footer(); ?>