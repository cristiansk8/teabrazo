<section id="lineas">
    <div class="lineas">
            <div class="lineas__destacado">
                <?php the_field('destacado') ?>
            </div>
    <div class="lineas">
        <?php
            while(have_rows('items')): the_row();
            ?>
            <div class="lineas__item col-lg-2 no-gutters">
                <picture>
                    <img src="<?php the_sub_field('imagen') ?>" alt="">
                </picture>
                <div class="lineas__text"><?php the_sub_field('texto')?>
                </div>
            </div>
            <?php
        endwhile;
            ?>
    </div>
</section>