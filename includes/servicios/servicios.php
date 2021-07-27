<section id="servicios">
  <div class="container-servicios">
    <div class="container-servicios">
        <?php
        while(have_rows('servicios')): the_row();
        ?>

        <div class="item">
            <figure>
              <img src="<?php the_sub_field('imagen') ?>" alt="">
            </figure>
                <div class="titulo">
                    <h4>
                       <?php the_sub_field('titulo') ?>
                    </h4>
                </div>
            <div class="caption">
              <?php the_sub_field('info') ?>
            </div>
        </div>


      <?php endwhile; ?>
    </div>
  </div>

</section>