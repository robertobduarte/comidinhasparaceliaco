<?php
/**
 * The default template for displaying header
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

	/** 
	 * catchresponsive_doctype hook
	 *
	 * @hooked catchresponsive_doctype -  10
	 *
	 */
	do_action( 'catchresponsive_doctype' );?>

<head>
<?php	
	/** 
	 * catchresponsive_before_wp_head hook
	 *
	 * @hooked catchresponsive_head -  10
	 * 
	 */
	do_action( 'catchresponsive_before_wp_head' );

	wp_head(); ?>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5Z8C4J');</script>
	<!-- End Google Tag Manager -->
	
	
	<script>
	  <!-- Google Analytics -->
	  /*
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-86653626-1', { 'cookiename' : 'my_ga_cookie' });
	  ga('send', 'pageview'); 
	  */x
	</script>

</head>



<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5Z8C4J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php 
	/** 
     * catchresponsive_before_header hook
     *
     */
    do_action( 'catchresponsive_before' );
	
	/** 
	 * catchresponsive_header hook
	 *
	 * @hooked catchresponsive_page_start -  10
	 * @hooked catchresponsive_header_start- 20
	 * @hooked catchresponsive_mobile_header_nav_anchor - 30
	 * @hooked catchresponsive_mobile_secondary_nav_anchor - 40
	 * @hooked catchresponsive_site_branding - 50
	 * @hooked catchresponsive_header_right - 60
	 * @hooked catchresponsive_header_end - 100
	 * 
	 */
	do_action( 'catchresponsive_header' );

	/** 
     * catchresponsive_after_header hook
     *
     * @hooked catchresponsive_primary_menu - 20
     * @hooked catchresponsive_secondary_menu - 30
	 * @hooked catchresponsive_featured_overall_image - 40
     * @hooked catchresponsive_add_breadcrumb - 50
     */
	do_action( 'catchresponsive_after_header' ); 

	/** 
	 * catchresponsive_before_content hook
	 *
	 * @hooked catchresponsive_slider - 10
	 * @hooked catchresponsive_promotion_headline - 30
	 * @hooked catchresponsive_featured_content_display (move featured content above homepage posts - default option) - 40
	 */
	do_action( 'catchresponsive_before_content' );
	
	/** 
     * catchresponsive_content hook
     *
     *  @hooked catchresponsive_content_start - 10
     *  @hooked catchresponsive_add_breadcrumb - 20
     *  @hooked catchresponsive_content_sidebar_wrap_start - 40
     *
     */
	do_action( 'catchresponsive_content' );	