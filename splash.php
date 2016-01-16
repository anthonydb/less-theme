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
        <h1 class="splash-text">Hi, I'm <a href="http://www.anthonydebarros.com/about/">Anthony DeBarros</a>. I help teams make excellent <a href="http://www.anthonydebarros.com/awards/">digital products</a>. I also <a href="https://source.opennews.org/en-US/learning/understanding-households-and-relationships-census-/">analyze
        data</a> and <a href="https://www.github.com/anthonydb">write code</a>. Right now, I direct product development at <a href="https://www.documentcloud.org">DocumentCloud</a>. Please <a href="http://www.anthonydebarros.com/contact/">get in touch</a>.</h1>

        <h1 class="splash-hed">Recent writing:</h1>
        <?php query_posts('post_type=post&post_status=publish&posts_per_page=2&paged='. get_query_var('paged')); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="front-post" style="text-align: center;" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
            <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        <div class="front-post" style="text-align: center;"><h2 style="text-align: center;"><a href="http://www.anthonydebarros.com/index/">Read more ...</a></h2></div>

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
        <p>Copyright 2009-2016 Anthony DeBarros</p>
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
