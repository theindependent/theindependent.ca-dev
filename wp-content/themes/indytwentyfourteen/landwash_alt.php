<?php
/*
Template Name: Landwash Alt
*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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

<body style="background: #0E0E0E url(<?php bloginfo('url'); ?>/images/landwash_bg.jpg); background-attachment: fixed; background-position: top center; background-repeat: no-repeat;">

<div id="indy_container">
	<div id="landwash_logo2"><a href="<?php bloginfo('url'); ?>/landwash"><img border=0 src="<?php bloginfo('url'); ?>/images/landwash.png"></a></div>

	<div id="landwash_menu">
	<ul>
	<li><a href="<?php bloginfo('url'); ?>/landwash">Home</a></li>|<li><a href="<?php bloginfo('url'); ?>/landwash/issues">Issues</a></li>|<li><a href="<?php bloginfo('url'); ?>/landwash/about">About</a></li>|<li><a href="<?php bloginfo('url'); ?>/landwash/contribute">Contribute</a></li>|<li><a href="<?php bloginfo('url'); ?>">The Indy</a></li>
	</ul>
	</div>

<div id="indy_feature" style="background: url(<?php bloginfo('url'); ?>/images/landwash_post_bg.png); background-repeat: repeat-y; margin: 0px 0px 0px 0px; padding: 20px 0px 0px 0px;">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<h1 style="padding: 0px 0px 0px 0px; margin: 0px 0px 0px 20px; font-size: 40px; font-weight: 500; color: orange; text-shadow: -1px 1px #404040;"><?php the_title() ?></h1>		
			
				<div id="indy_feature_photo_singlepost"><?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><a href="<?php echo $image[0]; ?>" rel="lightbox"><img src="<?php echo $image[0]; ?>"></a><?php endif; ?><h5><?php if (get_post_meta($post->ID, 'Photo Credit', true) != "") { echo get_post_meta($post->ID, 'Photo Credit', true); } ?></h5></div><?php endwhile; ?>
				
	


	<div id="indy_single_landwash">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
</div>
	

			</div>
<div id="indy_right_column">
<h7>SEARCH</h7>
<div id="indy_search"><?php include('landwash_search.php'); ?></div>


<h7>SOCIAL MEDIA</h7>
<div id="landwash_share">
	<a href="http://www.facebook.com/pages/TheIndependentca/111983398876007" target="_new"><img src="http://www.theindependent.ca/images/landwash_fb.jpg"></a>&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/#!/IndependentNL" target="_new"><img src="http://www.theindependent.ca/images/landwash_tw.jpg"></a>
</div>


<h7>CURRENT ISSUE</h7>
<div id="landwash_issue">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5070 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><BR><a href="<?php the_permalink(); ?>" style="color: orange;"><?php the_title() ?></a><BR><small><a href="<?php echo get_post_meta($post->ID, 'DownloadPDF', true); ?>" target="_new"><I>Download PDF</i></a></small><?php endforeach; ?>
</div>


<h7>PAST ISSUES</h7>
<?php global $post; $args = array( 'numberposts' => 2, 'offset'=> 1, 'category' => 5070 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div id="landwash_issue"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><BR><a href="<?php the_permalink(); ?>"><?php the_title() ?></a><BR><small><a href="<?php echo get_post_meta($post->ID, 'DownloadPDF', true); ?>" target="_new"><I>Download PDF</i></a></small></div><?php endforeach; ?>

<div id="landwash_issue">

</div>

<div id="landwash_sidetext">
<B><a href="http://www.theindependent.ca/landwash/issues">Click here</a></b> to view all of<BR>our past issues.
</div>

</div>
</div>

<div id="landwash_footer">
A project by:<BR><BR>

<a href="http://www.theindependent.ca/" target="_new"><img src="http://www.theindependent.ca/images/logo_invert.jpg"></a>
<BR><BR>
<a href="<?php bloginfo('url'); ?>/landwash">Home</a> | <a href="<?php bloginfo('url'); ?>/landwash/issues">Issues</a> | <a href="<?php bloginfo('url'); ?>/landwash/about">About</a> | <a href="<?php bloginfo('url'); ?>/landwash/contribute">Contribute</a> <BR><BR>
<small>All content in Landwash is copyright <a href="http://www.theindependent.ca" target="_new">TheIndependent.ca</a> and subject to the 'Privacy' and 'Terms of Use' outlined on our website: <a href="http://www.theindependent.ca" target="_new">www.theindependent.ca</a>.</small>
</div>

</div>
	<?php wp_footer(); ?>
</body>
</html>