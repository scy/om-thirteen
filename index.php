<?php get_header(); ?>

<?php if (have_posts()): ?>

	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
		<hr />
	<?php endwhile; ?>
	<?php if (is_page() || is_home()): ?>
		<?php
			$quotes = new WP_Query(array(
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field'    => 'slug',
						'terms'    => array('post-format-quote'),
					),
				),
				'posts_per_page' => 1,
				'orderby' => 'rand',
				'skip_om13_filter_posts' => true,
			));
			if ($quotes->have_posts()) {
				$quotes->the_post();
				get_template_part('content', get_post_format());
				wp_reset_postdata();
			}
		?>
	<?php endif; ?>

<?php else: ?>

<?php endif; ?>

<?php get_footer(); ?>
