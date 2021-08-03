
<?php
  /**
   *
   - Bloque Banner -> block_banner
        - Imagen block_banner__image
        - Titulo -> block_banner__title
        - Texto -> block_banner__text
  */

   $block_banner = get_field('block_banner');

  if ($block_banner) : ?>
  <section class="block-banner container-fluid no-gutters">
    <?php
    while(have_rows('block_banner')): the_row();
        $ms_image = get_sub_field('block_banner__image');
        $ms_title = get_sub_field('block_banner__title');
        $ms_text = get_sub_field('block_banner__text');        
     ?>
      <div class="block-banner--<?php echo $ms_bg; ?> row g-0">
        <div class="col-lg-6">
          <?php if ($ms_link) : ?>
            <a href="<?php echo $ms_link; ?>">
          <?php endif; ?>
          <picture class="block-banner__image">          
            <?php if ($ms_image) : ?>
              <img src="<?php the_sub_field('block_banner__image')?>" />
            <?php endif; ?>
          </picture>
          <?php if ($ms_link) : ?>
            </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-6">
          <div class="block-banner__content">
            <?php if ($ms_text) : ?>
              <h2 class="block-banner__title">
                <?php echo $ms_title; ?>
              </h2>
              <p class="block-banner__text"><?php echo $ms_text; ?></p>
            <?php endif; ?>
            <?php if ($ms_image_side) : ?>
              <figure class="block-banner__side-img">
                <img src="<?php echo esc_url($ms_image_side['url']); ?>"/>
              </figure>
            <?php endif; ?>
            <?php if ($ms_link) : ?>
              <a href="<?php echo $ms_link; ?>" class="c-button">
                <span class="c-button__content"><?php echo $ms_text_link; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php
    endwhile; ?>
  </section>
<?php
  endif;
