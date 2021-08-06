<?php 	get_template_part('includes/header');?>

<div class="container-single">

  <div class="row">
    <div class="col-md-12">
      <figure class="text-center">
         <img src="<?php the_post_thumbnail_url(); ?>" alt="te-abrazo-colombia">
      </figure>
    </div>
    <div class="container-single-content">
    <div class="col-md-12 text-left">
    <a href="/nosotros"> < Volver</a>
  </div>
      <div id="content" role="main" class="col-md-12 col-sm-12">
        <div class="caption ">
          <h1 class="headline headline--4">
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div>
      </div><!-- /#content -->

    </div>
  </div><!-- /.row -->

</div><!-- /.container -->


<?php	get_template_part('includes/footer'); ?>