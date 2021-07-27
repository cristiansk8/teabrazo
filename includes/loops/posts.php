<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 9
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="news news--related">

    <div class="banner">
      <figure class="text-center">
      <?php if ( wp_is_mobile() ):?>
          <img src="<?php the_field('hero_banner')?>" alt="cos-consulting-blog">
      <?php else: ?>
          <img src="<?php the_post_thumbnail_url();?>" alt="cos-consulting-blog">
      <?php endif;?>
      </figure>
    </div>

  <div class="container-fluid padding-contendor-elemetos">
    <div class="row">
      <header>
        <?php if(ICL_LANGUAGE_CODE=='es'): ?>
        <h2>NUESTRO BLOG</h2>
        <?php else: ?>
          <h2>OUR BLOG</h2>
        <?php endif; ?>
      </header>
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item col-md-4">
        <div class="news__image image-ar image-ar--32">
        <a href="<?php the_permalink(); ?>" class="d-block">
            <picture class="news__image image-ar image-ar--32">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </pictute>
          </a>
        </div>
        <div class="block-beige">

        </div>
        <div class="news__caption">
          <h3 class="headline headline--4">
            <?php the_title(); ?>
          </h3>

          <a href="<?php the_permalink(); ?>" class="body body--bd">Leer más</a>
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
