<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'aliados',
  'posts_per_page' => 20
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="news news--related">
  <header class="section__headline">
    <h2>
            ALIADOS
    </h2>
  </header>
  <div class="container-fluid padding-contendor-elemetos">
    <div class="">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item">
          <div class="news__image image-ar image-ar--32">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
      </div>
        <?php
    endwhile;
    ?>

    </div>
  </div>
</section>
    <?php
endif;
wp_reset_postdata();