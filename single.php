<?php 	get_template_part('includes/header');?>

<div class="container-single">
  <div class="row">
    <div class="col-md-12">
      <figure class="text-center">
            <img src="<?php the_post_thumbnail_url();?>" alt="cos-consulting-blog">
      </figure>
    </div>
    <div class="container-single-content">
      <div id="content" role="main" class="col-md-8 col-sm-8">
        <div class="caption container">
          <h1 class="headline headline--4">
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div>
      </div><!-- /#content -->
      <div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div>
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->


<?php	get_template_part('includes/footer'); ?>