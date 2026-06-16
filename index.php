<?php get_header(); ?>

<main>
  <div id="top" class="wrapper">
    <ul class="product-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
              <p><?php the_title(); ?></p>
              <p>&yen;99,999 +tax</p>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
    <a class="link-text" href="<?php echo home_url('/products/'); ?>">
  View More
</a>
  </div>
</main>

<?php get_footer(); ?>