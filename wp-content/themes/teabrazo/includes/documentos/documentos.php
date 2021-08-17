<section id="docs">
  <div class="container-about">
    <div class="container-about__info ">
        <?php the_content(); ?>
        </div>
    <div class="container-docs">
        <?php
        while(have_rows('documentos')): the_row();
        ?>

        <div class="item">
            <h3>
                <?php the_sub_field('titulo') ?>
            </h3>
            <p>
                <?php the_sub_field('descripcion') ?>
            </p>
            <a target="_blank" href="<?php the_sub_field('documento') ?>">Ver PDF</a>
        </div>


      <?php endwhile; ?>
    </div>
  </div>

</section>