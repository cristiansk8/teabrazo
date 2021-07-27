<section id="historia">
    <div class="historia">
        <div class="historia__highlight">
            <?php the_field('nuestra_historia') ?>
        </div>
        <div class="banner-5050">
            <figure>
                <img src="<?php the_field('imagen') ?>" alt="">
            </figure>
            <div class="caption">
            <?php the_field('info') ?>
            </div>
        </div>
        <div class="banner-5050">
        <div class="caption">
                <?php the_field('info_2') ?>
            </div>
            <figure>
                <img src="<?php the_field('imagen_2') ?>" alt="">
            </figure>

        </div>
    </div>
</section>