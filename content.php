<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php esc_attr(sprintf(__('Permalink für %s', 'om-thirteen'), the_title_attribute('echo=0')));?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
