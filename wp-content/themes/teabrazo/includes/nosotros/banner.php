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
            <?php if ($ms_image) : ?>
              <img src="<?php the_sub_field('main_slider__image')?>" />
            <?php endif; ?>
          </picture>
          <?php if ($ms_text) : ?>
            <div class="main-slider__caption container  <?php the_sub_field('color')?>">
             <?php echo $ms_text; ?>
            </div>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
  </section>
<?php


