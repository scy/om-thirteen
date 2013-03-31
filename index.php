<?php get_header(); ?>

<?php if (have_posts()): ?>

	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
		<hr />
	<?php endwhile; ?>
	<?php if (is_page() || is_home()): ?>
		<?php // TODO: Display a random quote. ?>
	<?php endif; ?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>
