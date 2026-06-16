<?php get_header(); ?>

<main>
  <div class="content wrapper">
    <h1 class="page-title">Products</h1>

    <ul class="product-list">

      <?php
      $posts = get_posts([
        'numberposts' => -1
      ]);

      foreach ($posts as $post) :
        setup_postdata($post);
      ?>

        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
            <p><?php the_title(); ?></p>
            <p>&yen;99,999 +tax</p>
          </a>
        </li>

      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>

    </ul>
  </div>
</main>

<?php get_footer(); ?>