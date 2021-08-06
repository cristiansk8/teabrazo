<?php
          $ms_text2 = get_field('title');

?>
<div class="impact">
    <div class="container-fluid no-gutters">
        <div class="block-banner--ipact row g-0">
            <div class="col-lg-5 left">
                <figure>
                    <img src="<?php the_field('image') ?>" alt="">
                </figure>
                <h2>
                    <?php echo $ms_text2 ?>
                </h2>
            </div>
            <div class="col-lg-7">
                <div class="info">
                    <?php the_field('info') ?>
                </div>
                <figure>
                    <img src="<?php the_field('image_2') ?>" alt="">
                </figure>

            </div>
        </div>
    </div>
</div>