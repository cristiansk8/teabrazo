<div class="Aliados">
      <?php
        while(have_rows('aliados')): the_row();
        ?>
        <div class="highligh__item">
          <picture>
            <img src="<?php the_sub_field('logo') ?>" alt="">
          </picture>
        </div>
        <?php
      endwhile;
         ?>
</div>