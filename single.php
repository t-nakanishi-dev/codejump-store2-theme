<?php get_header(); ?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="content wrapper">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div id="item">
          <div class="item-img">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <div class="item-text">

            <?php the_content(); ?>

            <p class="item-price">&yen;99,999 +tax</p>
            <dl>
              <dt>SIZE：</dt>
              <dd>W999 × D999 × H999</dd>
              <dt>COLOR：</dt>
              <dd>テキスト</dd>
              <dt>MATERIAL：</dt>
              <dd>テキストテキストテキスト</dd>
            </dl>
          </div>
        </div>
        <a class="link-text" href="<?php echo home_url('/products/'); ?>">
          Back To Products
        </a>
      </div>

  <?php endwhile;
  endif; ?>

</main>

<?php get_footer(); ?>