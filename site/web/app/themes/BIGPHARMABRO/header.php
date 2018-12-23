<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-96x96	.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fa/css/font-awesome.min.css">

		<?php wp_head(); ?>

		<meta property="og:title" content="Texts from Big Pharma Bro">
		<meta property="og:site_name" content="BigPharmaBro">
		<meta property="og:url" content="http://bigpharmabro.com">
		<meta property="og:description" content="Big Pharma Bro will make you sick bragging about the untold millions he spends on Capitol Hill buying influence. No wonder he owns so many monopolies on life-saving medicines.">
		<meta property="fb:app_id" content="255472504839617">
		<meta property="og:type" content="article">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/BPB-thumb.jpg">

		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15777238-7', 'auto');
  ga('send', 'pageview');

</script>

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '255472504839617',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<!-- <header class="header" role="banner">
						<div class="row"><div class="large-12 columns">&nbsp;</div></div>
						<div class="row">
							<div class="large-12 columns">
							
						 		<h1>Bigpharmalies is live ;)</h1>
								<h2>Don't Share This Link, You Crazy Kid.</h2>
							</div>
						</div>
		 	
					</header> end .header -->
