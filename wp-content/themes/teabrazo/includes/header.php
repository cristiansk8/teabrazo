<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-wa_rning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <div class="container-header">
    <div class="row-header">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-nav--left',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>


      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container -->
</nav>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->

<a id="sendbtn" class="floating_button" href="https://wa.link/nzmt9m" role="button" target="_blank"></a>
<!--<a href="https://wa.link/lh5z6x" target="_blank" class="whatsapp" aria-hidden="true"></a> -->
<style> 
.floating_button { 
 right: 20px; 
 position: fixed; 
 width: 60px; 
 height: 60px; 
 bottom: 20px; 
 background-color: #25D366; 
 color: #ffffff; 
 border-radius: 50px; 
 text-align: center; 
 box-shadow: 0 8px 25px -5px rgba(45, 62, 79, .3); 
 z-index: 9999999; 
 text-decoration: none; 
 background-image: url(http://www.pueblopanaca.com/wp-content/themes/infinite/images/asset.svg);
} 
.floating_button:before { 
 content: url(data:image/svg+xml,%3Csvg xmlns='http://local-choco.com/wp-content/uploads/2021/07/Icono-wa-mosca.svg' viewBox='0 0 24 24' width='30px' height='30px'%3E%3Cpath fill='%23fff' d='M3.516 3.516c4.686-4.686 12.284-4.686 16.97 0 4.686 4.686 4.686 12.283 0 16.97a12.004 12.004 0 01-13.754 2.299l-5.814.735a.392.392 0 01-.438-.44l.748-5.788A12.002 12.002 0 013.517 3.517zm3.61 17.043l.3.158a9.846 9.846 0 0011.534-1.758c3.843-3.843 3.843-10.074 0-13.918-3.843-3.843-10.075-3.843-13.918 0a9.846 9.846 0 00-1.747 11.554l.16.303-.51 3.942a.196.196 0 00.219.22l3.961-.501zm6.534-7.003l-.933 1.164a9.843 9.843 0 01-3.497-3.495l1.166-.933a.792.792 0 00.23-.94L9.561 6.96a.793.793 0 00-.924-.445 1291.6 1291.6 0 00-2.023.524.797.797 0 00-.588.88 11.754 11.754 0 0010.005 10.005.797.797 0 00.88-.587l.525-2.023a.793.793 0 00-.445-.923L14.6 13.327a.792.792 0 00-.94.23z'/%3E%3C/svg%3E; 
 position: relative; 
 color: #ffffff; 
 font-size: 30px; 
 display: block; 
 text-align: center; 
 width: 60px; 
 top: 0px; 
 speak: none; 
 font-style: normal; 
 font-weight: normal; 
 font-variant: normal; 
 text-transform: none; 
 line-height: 1; 
 text-align: center; 
 margin-top: 15px; 
} 
</style> 

