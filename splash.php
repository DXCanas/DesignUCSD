<?php
/*
Template Name: Splash
*/?>
   <!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
        <div class="wrapper-overlay">
            <!-- wrapper -->
            <div class="wrapper-splash">

                <!-- header -->
                <header class="header clear" role="banner">

                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                            </a>
                        </div>
                        <!-- /logo -->

                        <!-- nav -->
                        <nav class="nav" role="navigation">
                            <?php html5blank_nav(); ?>
                        </nav>
                        <!-- /nav -->

                </header>
                <!-- /header -->

        <main role="main" class="splash-message">
            <h1>there's a</h1>
            <h1>designer in</h1>
            <h1>all of us.</h1>
            <h3>leading students in collaborating across disciplines.</h3>
        </main>
    <?php get_sidebar(); ?>
                <!-- footer -->
                <footer class="footer" role="contentinfo">

                    <!-- copyright -->
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
                        <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
                    </p>
                    <!-- /copyright -->

                </footer>
                <!-- /footer -->

            </div>
            <!-- /wrapper -->
        </div>
        <!-- /wrapper-overlay -->
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

