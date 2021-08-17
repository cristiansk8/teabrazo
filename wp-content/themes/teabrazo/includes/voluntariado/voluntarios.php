<section id="voluntariados">
  <div class="container-voluntariados">
  <div class="highlight">
        <?php>
        the_content();
        ?>
    </div>
    <div class="container-voluntariados">
        <?php
        while(have_rows('voluntariados')): the_row();
        ?>

        <div class="item">
            <figure>
              <img src="<?php the_sub_field('foto') ?>" alt="">
            </figure>

            <div class="caption">
              <?php the_sub_field('info') ?>
            </div>
        </div>


      <?php endwhile; ?>
    </div>
  </div>

</section>