<?php get_header(); ?>
    <section id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <section class="post">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </section>
      <?php endwhile; else: ?>
        <p><?php echo 'Beklager, ingen poster matcher dine kriterier.'; ?></p>
      <?php endif; ?>
    </section>

    <?php get_footer(); ?>
  </div><?php # #container closed as part of header contract ?>

  <?php wp_footer(); ?>
</body>
</html>
