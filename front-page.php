<?php get_header(); ?>
		<section id="content">
			<article class="concept">
				<ul>
					<li><strong>Styrk</strong> din motivation</li>
					<li><strong>Kickstart</strong> din produktivitet</li>
					<li>Få tingene lavet med <strong>PowerUps</strong></li>
				</ul>
				<p>Har du før prøvet at føle dig umotiveret, når du mindst har brug for det? Kickstart din produktivitet med en PowerUp. PowerUps er hurtige og lette øvelser, der giver dig mere energi. Brug energien til at nå dit mål. Få det overstået, lige nu og lige her.</p>
				<p>Et samarbejde mellem:</p>
				<?php blog_image('sundheds2.png', 'Sundhedsstyrelsen'); ?>
				<?php blog_image('chris_logo_sort.png', 'Chris MacDonald'); ?>
			</article>

			<?php $count = 0; ?>
			<?php $images = array(
				'arbejde_banner.png',
				'hjemme1.png'
			); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="container">
					<article class="proposition <?php echo ($count++ % 2) ? even : odd ?>">
						<?php post_image($images[$count - 1]); ?>
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink(); ?>">Læs mere</a>
					</article>
				</div>
			<?php endwhile; else: ?>
			<p><?php echo 'Beklager, ingen poster matcher dine kriterier.'; ?></p>
			<?php endif; ?>

			<iframe seamless src="http://mod7af1489.keaweb.dk/goodvertizingpowerup/recent_powerups.php"></iframe>
		</section>

		<?php get_footer(); ?>
	</div><?php # #container closed as part of header contract ?>

	<?php wp_footer(); ?>
</body>
</html>
