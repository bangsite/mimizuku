<section class="_p-entry-summary">
	<h1 class="_p-entry-summary__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php get_template_part( 'template-parts/entry-meta' ); ?>
	<div class="_p-entry-summary__content">
		<?php the_excerpt(); ?>
	</div>
</section>
