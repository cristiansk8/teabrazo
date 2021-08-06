<section id="videos">
  <div class="container-about">
    <header class="highlight text-center">
      <h2>GALERIA DE VIDEOS</h2>
    </header>
    <div class="container-videos">
        <?php
        while(have_rows('videos')): the_row();
        ?>

        <div class="item">
            <figure>
              <img src="<?php the_sub_field('imagen') ?>" alt="">
            </figure>
            <div class="caption">
              <p><?php the_sub_field('texto') ?></p>
            </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</section>