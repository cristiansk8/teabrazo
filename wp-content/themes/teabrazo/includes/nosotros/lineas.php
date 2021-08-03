<section id="lineas">
    <div class="lineas">
            <div class="historia__highlight">
                <?php the_field('destacado') ?>
            </div>
        <?php
            while(have_rows('items')): the_row();
            ?>
            <div class="highligh__item">
            <picture>
                <img src="<?php the_sub_field('imagen') ?>" alt="">
            </picture>
            <p><?php the_sub_field('texto')?></p>
            </div>
            <?php
        endwhile;
            ?>
    </div>
</section>

<section id="areas">
<div class="banner-5050">
        <div class="caption-title">
                <?php the_field('titulo') ?>
            </div>
            <div class="caption-areas">
                <?php the_field('areas') ?>
            </div>

        </div>
</section>