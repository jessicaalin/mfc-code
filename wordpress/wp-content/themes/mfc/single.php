<?php

get_header(); ?>

<section class="single">

  <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>   
      <article class="post">
        <h1>
          <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h1>
        <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> </p>
        <div class="featured-image">
          <?php the_post_thumbnail('banner-image'); ?>
        </div>
        <p class="content"><?php the_content() ?></p>
      </article>
    <?php endwhile;
    else :
      echo '<p>No content found</p>';
    endif; ?>

</section>

<section class="api">
    <p>By the way, did you know that the sun rises in Orlando at <span id="sunrise"></span> UTC time today, and sets in Orlando at <span id="sunset"></span> UTC time tonight? Thanks to, Sunrise Sunset API, now you know! We hope you have beautiful day and night :D </p>
</section>

<?php get_footer()

?>

<script>
  fetch('https://api.sunrise-sunset.org/json?lat=28.538336&lng=-81.379234')
    .then(res => res.json())
    .then(res => {
        document.querySelector("#sunrise").innerHTML+= res.results.sunrise;
        document.querySelector("#sunset").innerHTML+= res.results.sunset;  
      })
</script>