<?php
  /**
   *
   - Bloque Banner -> historia
        - Titulo -> historia__title
        - SubTítulo -> historia__subtitle
        - Imagen historia__image
        - Texto -> historia__text
  */

   $historia = get_field('historia');

   $ms_subtitle = get_field('historia__subtitle');
   $ms_image = get_field('historia__image');
   $ms_title = get_field('historia__title');
   $ms_text = get_field('historia__text');  
?>
  <section class="historia container-fluid no-gutters">
      <div class="historia--<?php echo $ms_bg; ?> row g-0">
          <h2 class="historia__title">
            <?php echo $ms_title; ?>
          </h2>
          <div class="historia__subtitle">
            <?php echo $ms_subtitle; ?>
          </div>
      <div class="col-lg-6">
          <picture class="historia__image">          
            <?php if ($ms_image) : ?>
              <img src="<?php the_field('historia__image')?>" />
            <?php endif; ?>
          </picture>
        </div>
        <div class="col-lg-6">
          <div class="historia__content">
            <?php if ($ms_text) : ?>
              <p class="historia__text"><?php echo $ms_text; ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
  </section>

  <section class="historia container-fluid no-gutters">
  <?php
      $ms_image = get_field('imagen2');
      $ms_text = get_field('historia__text2');        
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
            <img src="<?php the_field('imagen2')?>" />
          <?php endif; ?>
        </picture>
      </div>        
    </div>
</section>