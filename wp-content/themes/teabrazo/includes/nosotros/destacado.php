
<?php
  /**
   *
   - Bloque Banner -> block_banner
        - Imagen block_banner__image
        - Titulo -> block_banner__title
        - Texto -> block_banner__text
  */
   ?>
  <section class="block-banner container-fluid no-gutters">
      <div class="block-banner row g-0">
        <div class="col-lg-6">
          <picture class="block-banner__image img-responsive">          
          <img src="<?php the_post_thumbnail_url();?>" alt="">          
        </picture>
        </div>
        <div class="col-lg-6">
          <div class="block-banner__content">
          <?php the_content();?>
          </div>
        </div>
      </div>
  </section>
<?php