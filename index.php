<?php get_header(); ?>

<?php if (have_posts()): ?>

	<?php while (have_posts()): the_post(); ?>
		<?php // TODO: Skip posts with format=quote. ?>
		<?php get_template_part('content', get_post_format()); ?>
		<hr />
	<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>
