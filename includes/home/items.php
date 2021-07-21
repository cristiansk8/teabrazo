<div class="banner-items">
    <div class="highlight">
        <?php>
        the_content();
        ?>
    </div>
      <?php
        while(have_rows('icons')): the_row();
        ?>
        <div class="highligh__item">
          <picture>
            <img src="<?php the_sub_field('icono') ?>" alt="">
          </picture>
          <p><?php the_sub_field('texto') ?></p>
        </div>
        <?php
      endwhile;
         ?>
</div>