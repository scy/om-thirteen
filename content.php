<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php esc_attr(sprintf(__('Permalink für %s', 'om-thirteen'), the_title_attribute('echo=0')));?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="entry-footer">
		<?php
			$date = sprintf('<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
				esc_url(get_permalink()),
				esc_attr(get_the_time()),
				esc_attr(get_the_date('c')),
				esc_html(get_the_date())
			);
			$author = sprintf('%1$s',
				get_the_author()
			);
			$wrapped = array();
			foreach (array($date, $author) as $item) {
				$wrapped[] = "<span class=\"meta-piece\">$item</span>";
			}
			echo implode(' ', $wrapped);
		?>
	</footer>
</article>
