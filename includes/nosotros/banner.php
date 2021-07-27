<?php
  /**
   *
   Main Slider -> main_slider
    - Item Slider (repater) -> main_slider__item
      - Imagen de fondo -> main_slider__image
      - Imagen de fondo en mobile (opcional) -> main_slider__image_mobile
      - Texto -> main_slider__body
      - Vinculo -> main_slider__cta
   */

   $main_slider = get_field('main_banner');

  ?>
  <section class="main-banner">
    <div class="">
    <?php
      while(have_rows('main_banner')): the_row();
          $ms_image = get_sub_field('main_slider__image');
          $ms_image_mobile = get_sub_field('main_slider__image_mobile');
          $ms_text = get_sub_field('main_slider__body');
        ?>
        <div class="main-slider__item">
          <picture class="main-slider__image">
            <?php if ($ms_image_mobile) : ?>
              <source media="(max-width: 799px)" srcset="<?php echo esc_url($ms_image_mobile['url']); ?>">
            <?php endif;?>
            <?php if ($ms_image) : ?>
              <img src="<?php the_sub_field('main_slider__image')?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
            <?php endif; ?>
          </picture>
          <?php if ($ms_text) : ?>
            <div class="main-slider__caption container">
              <h3 class="main-slider__title"><?php echo $ms_text; ?></h3>
            </div>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
  </section>
<?php
