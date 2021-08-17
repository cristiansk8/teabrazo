<section id="medios">
<header>
      <h2>MEDIOS DE DONACIÓN </h2>
    </header>
    <div class="medios">
            <?php
        while(have_rows('medios')):the_row();
        ?>
        <div class="item">
            <figure>
                <img src="<?php the_sub_field('imagen')?>" alt="">
            </figure>
            <a href="<?php the_sub_field('link')?>">Donar</a>
        </div>
        <?php endwhile ?>
    </div>

</section>
