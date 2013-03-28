<?php
echo '<' . '?xml version="1.0" encoding="';
bloginfo('charset');
echo '"?' . '>';
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7" <?php language_attributes();?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8" <?php language_attributes();?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html class="no-js no-ie" <?php language_attributes();?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php if (is_home()) {
	bloginfo('name'); ?> &ndash; <? bloginfo('description');
} else {
	wp_title('&laquo;', true, 'right');
	bloginfo('name');
} ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">

<header>
</header>

<div id="main">
