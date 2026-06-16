<?php get_header(); ?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="content wrapper">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div id="about">

          <?php the_content(); ?>

        </div>
      </div>

  <?php endwhile;
  endif; ?>
 
</main>

<?php get_footer(); ?>