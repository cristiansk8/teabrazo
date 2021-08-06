<section class="team container-fluid no-gutters>
  <div class="container-about">
    <header class="team__header highlight text-center">
      <h2>NUESTRO EQUIPO</h2>
    </header>
    <div class="container-team">
        <?php
        while(have_rows('equipo')): the_row();
        ?>
      <div class="col-lg-4">
        <div class="item">
            <figure>
              <img src="<?php the_sub_field('foto') ?>" alt="">
            </figure>
            <div class="caption">
              <?php the_sub_field('info') ?>
            </div>
        </div>
      </div>

      <?php endwhile; ?>
    </div>
  </div>

</section>

