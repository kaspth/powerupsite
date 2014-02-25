<?php get_header(); ?>
		<section id="content">

			<?php $count = 0; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="container">
					<article class="proposition <?php echo ($count++ % 2) ? even : odd ?>">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink(); ?>">Læs mere</a>
					</article>
				</div>
			<?php endwhile; else: ?>
			<p><?php echo 'Beklager, ingen poster matcher dine kriterier.'; ?></p>
			<?php endif; ?>

		</section>

		<?php get_footer(); ?>
	</div><?php # #container closed as part of header contract ?>

	<?php wp_footer(); ?>
</body>
</html>
