<?php
echo '<' . '?xml version="1.0" encoding="';
bloginfo('charset');
echo '"?' . '>';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js ie-lt9 ie-lt8 ie-lt7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js ie-lt9 ie-lt8"        <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie-lt9"               <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]>  <html class="no-js ie-ok"                <?php language_attributes(); ?>> <![endif]-->
<!--[if !IE]><!--> <html class="no-js no-ie"                <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php if (is_home()) { // TODO: not true on "static page" home
	bloginfo('name'); ?> &ndash; <? bloginfo('description');
} else {
	wp_title('&laquo;', true, 'right');
	bloginfo('name');
} ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="document">

<div id="page">

<header id="top" class="cf">
<div id="logo"><a href="<?php echo esc_url(home_url('/')); ?>" title="zur Startseite"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-header.png'); ?>" width="288" height="126" alt="Logo der #om13 mit Slogan: challenge accepted." /></a><div id="tagline">23.–25.08.2013 • Jugendherberge Kassel</div></div><?php // TODO: __ ?>
<?php wp_nav_menu(array(
	'theme_location' => 'primary',
	'container' => 'nav',
	'container_id' => 'nav-menu',
)); ?>
</header>
<hr />

<div id="main">
