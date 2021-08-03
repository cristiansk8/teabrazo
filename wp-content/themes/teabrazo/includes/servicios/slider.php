<section id="slider">
  <div class="container-slider">
    <div class="container-slider">
        <?php
        while(have_rows('slider')): the_row();
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
        </div>


      <?php endwhile; ?>
    </div>
  </div>

</section>