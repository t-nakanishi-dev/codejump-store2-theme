<?php get_header(); ?>

<main>
  <div id="top" class="wrapper">
    <ul class="product-list">
      <?php
      // トップページ用に、商品を最大8件・古い順で取得する設定
      $args = [
        'post_type'      => 'post',
        'posts_per_page' => 8,
        'orderby'        => 'date',
        'order'          => 'asc'
      ];

      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
              <p><?php the_title(); ?></p>
              <p>&yen;99,999 +tax</p>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
      <?php wp_reset_postdata(); // クエリのリセットをお忘れなく！ 
      ?>
    </ul>

    <a class="link-text" href="<?php echo home_url('/products/'); ?>">
      View More
    </a>
  </div>
</main>

<?php get_footer(); ?>