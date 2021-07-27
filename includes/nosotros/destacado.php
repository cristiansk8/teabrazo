<section id="about-home">
  <div class="container-about">
    <div class="container-about__image ">
        <figure>
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        </figure>
    </div>
    <div class="container-about__info ">
      <?php the_content(); ?>
    </div>
  </div>
</section>