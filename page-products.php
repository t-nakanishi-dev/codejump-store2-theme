<?php get_header(); ?>

<main>
  <div class="content wrapper">
    <h1 class="page-title">Products</h1>

    <ul class="product-list">

      <?php
      // 1. 現在のページ番号を取得（1ページ目なら1、2ページ目なら2）
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      // 2. データを取得するための条件（クエリ）を設定
      $args = [
        'post_type'      => 'post',      // 投稿を取得
        'posts_per_page' => 12,          // 1ページに12枚表示
        'orderby'        => 'date',      // 日付順
        'order'          => 'asc',       // 古い順（item1から表示）
        'paged'          => $paged,      // 現在のページ番号を渡す
      ];

      // 3. WP_Queryを実行
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
              <p><?php the_title(); ?></p>
              <p>&yen;99,999 +tax</p>
            </a>
          </li>

        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); // ループが終わったら必ずリセット 
      ?>

    </ul>

    <div class="pagination-wrapper">
      <?php
      echo paginate_links([
        'total'              => $the_query->max_num_pages, // 全体のページ数
        'current'            => $paged,                   // 現在のページ番号
        'prev_next'          => false,                    // 「前へ」「次へ」のリンクを非表示（数字だけに）
        'type'               => 'list',                   // <ul><li>の構造で出力させる！
        'screen_reader_text' => ' ',                      // 余計な見出しを消す
      ]);
      ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>