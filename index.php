<?php define( 'WP_DEBUG', true ); ?>
<?php define( 'WP_DEBUG_DISPLAY', true ); define('WP_CACHE', false);?>

 

<!doctype html>
<html lang="en">
  
<!-- Mirrored from getbootstrap.com/docs/4.5/examples/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 06:01:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="index.html">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri();?> /style.css" rel="stylesheet">
  </head>
  <body>
      
    <!-- header -->
	<?php get_header()?>
	<!-- header -->
	
	
	<main role="main" class="container">
	  <div class="row">
		
		<!-- /.blog-main -->
		<div class="col-md-8 blog-main">
		  <h3 class="pb-4 mb-4 font-italic border-bottom">
			From the Firehose  
		  </h3>
			
		 <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>	
		  
			  <div class="blog-post">
				<h2 class="blog-post-title"><?php the_title();?></h2>
				<p class="blog-post-meta"><?php the_time( 'M j y' ); ?> by <a href="#"><?php the_author(); ?></a></p>

				<?php the_content(); ?>
			  </div><!-- /.blog-post -->
			  
		   
		  

			  <nav class="blog-pagination">
				<?php next_posts_link( 'Older' ); ?>
				<?php previous_posts_link( 'Newer' ); ?>
			  </nav>
			<?php endwhile;?>  
		 <?php else : ?>
		 <?php endif; ?>
		 
		</div>
		<!-- /.blog-main -->
		
		<!-- /.blog-sidebar -->
		<?php get_sidebar();?>
		<!-- /.blog-sidebar -->

	  </div><!-- /.row -->

	</main><!-- /.container -->

	 <?php get_footer();?>
</body>

<!-- Mirrored from getbootstrap.com/docs/4.5/examples/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 06:01:02 GMT -->
</html>
