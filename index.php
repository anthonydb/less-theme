<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MLD8S5');</script>
<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> &#58;&#58; <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MLD8S5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">

		<div id="brand">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- /brand -->

		<!-- Pull in nav elements -->
		<?php include (TEMPLATEPATH . '/navigation.php'); ?>

		<div class="clear"></div>
	</div><!--/container -->

</header><!-- #masthead .site-header -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/

	if( is_home() || is_archive() ) {

?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php the_time('M j, Y'); ?><?php _e(' &#124; '); ?> <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php the_category(', '); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<!-- pagination -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/

	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php the_time('M j, Y'); ?><?php _e(' &#124; '); ?> <?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php the_category(', '); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* 404 page
	/*-----------------------------------------------------------------------------------*/
  if ( is_404() ) {
    echo "<b>Oops, 404!</b><br/>Page Not Found";
  }
?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/

	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>

						<div class="the-content">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer(); ?>
