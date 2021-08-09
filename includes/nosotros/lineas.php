<section id="lineas">
    <div class="lineas">
            <div class="lineas__destacado">
                <?php the_field('destacado') ?>
            </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <?php
            while(have_rows('items')): the_row();
            ?>
            <div class="lineas__item col-lg-2">
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