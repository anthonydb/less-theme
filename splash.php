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
                <a href="http://www.anthonydebarros.com/about/"><button class="button button1">About</button></a>
                <a href="http://www.anthonydebarros.com/index/"><button class="button button1">Writing</button></a>
                <a href="http://www.anthonydebarros.com/contact/"><button class="button button1">Contact</button></a>
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

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11819184-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
