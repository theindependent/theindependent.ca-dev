<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "4e1057b2-0f7a-4ca7-9029-a714874bc227", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script> 

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/scripts/indy.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Andada' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/images/favicon.ico" />

<script type="text/javascript">

	function toggleLayer( whichLayer )

{

  var elem, vis;

  if( document.getElementById ) // this is the way the standards work

    elem = document.getElementById( whichLayer );

  else if( document.all ) // this is the way old msie versions work

      elem = document.all[whichLayer];

  else if( document.layers ) // this is the way nn4 works

    elem = document.layers[whichLayer];

  vis = elem.style;

  // if the style.display value is blank we try to figure it out here

  if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)

    vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';

  vis.display = (vis.display==''||vis.display=='block')?'none':'block';

}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19908062-8', 'theindependent.ca');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>

</head>

<body>

<div id="indy_container">
	<div id="indy_logo2"><a href="<?php bloginfo('url'); ?>"><img border=0 src="<?php bloginfo('url'); ?>/images/the_indy.jpg"></a></div>

	<div id="indy_menu">
	<ul>
	<li class="house"><div id="house"><a href="<?php bloginfo('url'); ?>"><img border=0 src="<?php bloginfo('url'); ?>/images/house.png"></a></div></li>|<li><a href="<?php bloginfo('url'); ?>/news">News</a></li>|<li><a href="<?php bloginfo('url'); ?>/opinion">Opinion</a></li>|<li><a href="<?php bloginfo('url'); ?>/landwash">Landwash</a></li>|<li><a href="<?php bloginfo('url'); ?>/letters">Letters</a></li>|</li><li><a href="<?php bloginfo('url'); ?>/about">About</a></li>|<li><a href="<?php bloginfo('url'); ?>/contribute">Contribute</a></li>|<li class="the_menu2"><a href="<?php bloginfo('url'); ?>/goindy2015" style="background:#4484D0">Donate</a></li>
	</ul>
		<div id="indy_share">
			<a href="http://www.facebook.com/pages/TheIndependentca/111983398876007" target="_new"><img border=0 src="<?php bloginfo('url'); ?>/images/icon_facebook.jpg"></a>&nbsp;&nbsp;
			<a href="http://twitter.com/#!/IndependentNL" target="_new"><img border=0 src="<?php bloginfo('url'); ?>/images/icon_twitter.jpg"></a>&nbsp;&nbsp;
			<a href="http://theindependent.ca/feed/" target="_new"><img border=0 src="<?php bloginfo('url'); ?>/images/icon_rss.jpg"></a>&nbsp;&nbsp;
			</div>
	</div>