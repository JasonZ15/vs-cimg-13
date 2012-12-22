<?php 
/*
Template Name: No Margin Full Width Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<link rel="Shortcut Icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container" style="width:980px;">
		<?php do_action('et_header_top'); ?>
		<header id="header" class="clearfix">
			
			
			
			<p class="social-buttons clearfix"><a id="fb" href="http://www.facebook.com/theGMIC"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons.png" /></a><a id="tt" href="http://www.twitter.com/theGMIC"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-02.png" /></a><a id="in" href="http://www.linkedin.com/groups?gid=2825839&trk=hb_side_g"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-03.png" /></a><a id="em" href="mailto: info@greatwallclub.com"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-05.png" /></a><a id="chinese-overview" href="http://www.gmic-sv.com/overview-chinese"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-06.png" /></a></p>
			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>		
		</header> 
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="fullwidth clearfix">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1 class="page_title"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>