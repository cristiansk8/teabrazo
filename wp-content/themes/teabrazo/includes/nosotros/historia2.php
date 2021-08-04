<?php
  /**
   *
   - Bloque Banner -> historia_2
        - Titulo -> historia__title
        - SubTítulo -> historia__subtitle
        - Imagen historia__image
        - Texto -> historia__text
  */

   $historia = get_field('historia_2');

  if ($historia) : ?>
  <section class="historia container-fluid no-gutters">
    <?php
    while(have_rows('historia_2')): the_row();
        $ms_image = get_sub_field('historia__image2');
        $ms_text = get_sub_field('historia__text2');        
     ?>
      <div class="historia--<?php echo $ms_bg; ?> row g-0">
        <div class="col-lg-6">
          <div class="historia__content">
            <?php if ($ms_text) : ?>
              <p class="historia__text"><?php echo $ms_text; ?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-6">
          <picture class="historia__image">          
            <?php if ($ms_image) : ?>
              <img src="<?php the_sub_field('historia__image2')?>" />
            <?php endif; ?>
          </picture>
        </div>        
      </div>
      <?php
    endwhile; ?>
  </section>
<?php
  endif;
