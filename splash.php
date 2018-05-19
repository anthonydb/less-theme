<?php
/*
Template Name: Splash
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
    /*-----------------------------------------------------------------------------------*/
    /* Start header
    /*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
    <div class="container">

    </div><!--/container -->

</header><!-- #masthead .site-header -->

<div class="container">
    <div id="primary">

        <div id="content" role="main">
        <article class="post">
            <h1 class="splash-text">Anthony DeBarros</h1>
            <div id="button-block">
                <a class="clear-button" href="/practical-sql/">Book</a>
                <a class="clear-button" href="/blog/">Posts</a>
                <a class="clear-button" href="/about/">About</a>
            </div>
        </article>
        </div><!-- #content .site-content -->

    </div><!-- #primary .content-area -->
</div><!-- / container-->

<?php
    /*-----------------------------------------------------------------------------------*/
    /* Start Footer
    /*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer" role="contentinfo">
    <div class="site-info container">
        <?php do_action( 'break_credits' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11819184-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
