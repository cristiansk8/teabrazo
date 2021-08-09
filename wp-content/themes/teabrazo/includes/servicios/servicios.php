<section id="servicios">
  <div class="container-servicios">
    <div class="row container-servicios">
        <?php
        while(have_rows('servicios')): the_row();
        ?>
      
        <div class="servicios col-sm-4">
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
            <div class="servicios__enlace">
              <a  href="<?php the_sub_field('link') ?> "target="_blank" > Contáctanos</a>
            </div>
        </div>
      
      


      <?php endwhile; ?>
    </div>
  </div>

</section>