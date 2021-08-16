<section id="servicios">
  <div class="container-fluid container-servicios">
    <div class="row container-servicios">
        <?php
        while(have_rows('servicios')): the_row();
        ?>

        <div class="servicios col-lg-4 center-block">
            <picture>
              <img class= "servicios__imagen img-responsive" src="<?php the_sub_field('imagen') ?>" alt="">
            </picture>
                <div class="servicios__titulo">
                    <h4>
                       <?php the_sub_field('titulo') ?>
                    </h4>
                </div>
            <div class="servicios__caption">
              <?php the_sub_field('info') ?>
            </div>
        </div>


      <?php endwhile; ?>
    </div>
  </div>

</section>