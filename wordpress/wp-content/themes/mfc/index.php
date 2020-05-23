<?php

get_header(); ?>

<section class="index">

  <div class="test">
    <h1>Find happy stories here!</h1>
  </div>

  <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <article class="post">
        <div class="post-card-thumbnail">
          <a href="<?php the_permalink(); ?>"></a>
          <div>
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
            </h2>
            <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> </p>
            <p>
              <?php echo get_the_excerpt() ?>
              <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
            </p>
          </div>
        </div>
      </article>
    <?php endwhile;
    else :
      echo '<p>No content found</p>';
    endif; ?>

</section>

<?php get_footer()

?>