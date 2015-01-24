<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/respond.min.js"></script>
	<![endif]-->

	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/inc/sss/sss.css" type="text/css" media="all">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sss/sss.min.js"></script>
</head>
