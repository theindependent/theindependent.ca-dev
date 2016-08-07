<?php
/*
Template Name: Landwash
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

<div id="indy_feature">
			
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_1_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_1_text').style.display='none';"></div>
	<div id="landwash_entry_1" onmouseover="document.getElementById('landwash_entry_1_text').style.display='block'; document.getElementById('landwash_entry_2_text').style.display='none'; document.getElementById('landwash_entry_3_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_1_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_1_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_1_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 1, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_2_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_2_text').style.display='none';"></div>
	<div id="landwash_entry_2" onmouseover="document.getElementById('landwash_entry_2_text').style.display='block'; document.getElementById('landwash_entry_1_text').style.display='none'; document.getElementById('landwash_entry_4_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_2_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_2_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_2_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 2, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_3_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_3_text').style.display='none';"></div>
	<div id="landwash_entry_3" onmouseover="document.getElementById('landwash_entry_3_text').style.display='block'; document.getElementById('landwash_entry_1_text').style.display='none'; document.getElementById('landwash_entry_4_text').style.display='none'; document.getElementById('landwash_entry_5_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_3_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_3_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_3_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 3, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_4_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_4_text').style.display='none';"></div>
	<div id="landwash_entry_4" onmouseover="document.getElementById('landwash_entry_4_text').style.display='block';
 document.getElementById('landwash_entry_2_text').style.display='none';
 document.getElementById('landwash_entry_3_text').style.display='none';
 document.getElementById('landwash_entry_6_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_4_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_4_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_4_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 4, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_5_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_5_text').style.display='none';"></div>
	<div id="landwash_entry_5" onmouseover="document.getElementById('landwash_entry_5_text').style.display='block'; document.getElementById('landwash_entry_3_text').style.display='none'; document.getElementById('landwash_entry_6_text').style.display='none'; document.getElementById('landwash_entry_7_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_5_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_5_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_5_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 5, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_6_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_6_text').style.display='none';"></div>
	<div id="landwash_entry_6" onmouseover="document.getElementById('landwash_entry_6_text').style.display='block'; document.getElementById('landwash_entry_4_text').style.display='none'; document.getElementById('landwash_entry_5_text').style.display='none'; document.getElementById('landwash_entry_8_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_6_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_6_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_6_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 6, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_7_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_7_text').style.display='none';"></div>
	<div id="landwash_entry_7" onmouseover="document.getElementById('landwash_entry_7_text').style.display='block'; document.getElementById('landwash_entry_5_text').style.display='none'; document.getElementById('landwash_entry_8_text').style.display='none'; document.getElementById('landwash_entry_9_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_7_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_7_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_7_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 7, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_8_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_8_text').style.display='none';"></div>
	<div id="landwash_entry_8" onmouseover="document.getElementById('landwash_entry_8_text').style.display='block'; document.getElementById('landwash_entry_6_text').style.display='none'; document.getElementById('landwash_entry_7_text').style.display='none'; document.getElementById('landwash_entry_10_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_8_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_8_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_8_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 8, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_9_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_9_text').style.display='none';"></div>
	<div id="landwash_entry_9" onmouseover="document.getElementById('landwash_entry_9_text').style.display='block'; document.getElementById('landwash_entry_7_text').style.display='none'; document.getElementById('landwash_entry_10_text').style.display='none'; document.getElementById('landwash_entry_11_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_9_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_9_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_9_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 9, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_10_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_10_text').style.display='none';"></div>
	<div id="landwash_entry_10" onmouseover="document.getElementById('landwash_entry_10_text').style.display='block'; document.getElementById('landwash_entry_8_text').style.display='none'; document.getElementById('landwash_entry_9_text').style.display='none'; document.getElementById('landwash_entry_12_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_10_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_10_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_10_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 10, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_11_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_11_text').style.display='none';"></div>
	<div id="landwash_entry_11" onmouseover="document.getElementById('landwash_entry_11_text').style.display='block'; document.getElementById('landwash_entry_9_text').style.display='none'; document.getElementById('landwash_entry_12_text').style.display='none'; document.getElementById('landwash_entry_13_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_11_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_11_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_11_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 11, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_12_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_12_text').style.display='none';"></div>
	<div id="landwash_entry_12" onmouseover="document.getElementById('landwash_entry_12_text').style.display='block'; document.getElementById('landwash_entry_10_text').style.display='none'; document.getElementById('landwash_entry_11_text').style.display='none'; document.getElementById('landwash_entry_14_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_12_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_12_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_12_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 12, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_13_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_13_text').style.display='none';"></div>
	<div id="landwash_entry_13" onmouseover="document.getElementById('landwash_entry_13_text').style.display='block'; document.getElementById('landwash_entry_11_text').style.display='none'; document.getElementById('landwash_entry_14_text').style.display='none'; document.getElementById('landwash_entry_15_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_13_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_13_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_13_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 13, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_14_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_14_text').style.display='none';"></div>
	<div id="landwash_entry_14" onmouseover="document.getElementById('landwash_entry_14_text').style.display='block'; document.getElementById('landwash_entry_12_text').style.display='none'; document.getElementById('landwash_entry_13_text').style.display='none'; document.getElementById('landwash_entry_16_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_14_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_14_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_14_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 14, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_15_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_15_text').style.display='none';"></div>
	<div id="landwash_entry_15" onmouseover="document.getElementById('landwash_entry_15_text').style.display='block'; document.getElementById('landwash_entry_13_text').style.display='none'; document.getElementById('landwash_entry_16_text').style.display='none'; document.getElementById('landwash_entry_17_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_15_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_15_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_15_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 15, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_16_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_16_text').style.display='none';"></div>
	<div id="landwash_entry_16" onmouseover="document.getElementById('landwash_entry_16_text').style.display='block'; document.getElementById('landwash_entry_14_text').style.display='none'; document.getElementById('landwash_entry_15_text').style.display='none'; document.getElementById('landwash_entry_18_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_16_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_16_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_16_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 16, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_17_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_17_text').style.display='none';"></div>
	<div id="landwash_entry_17" onmouseover="document.getElementById('landwash_entry_17_text').style.display='block'; document.getElementById('landwash_entry_15_text').style.display='none'; document.getElementById('landwash_entry_18_text').style.display='none'; document.getElementById('landwash_entry_19_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_17_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_17_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_17_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 17, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_18_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_18_text').style.display='none';"></div>
	<div id="landwash_entry_18" onmouseover="document.getElementById('landwash_entry_18_text').style.display='block'; document.getElementById('landwash_entry_16_text').style.display='none'; document.getElementById('landwash_entry_17_text').style.display='none'; document.getElementById('landwash_entry_20_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_18_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_18_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_18_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 18, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_19_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_19_text').style.display='none';"></div>
	<div id="landwash_entry_19" onmouseover="document.getElementById('landwash_entry_19_text').style.display='block'; document.getElementById('landwash_entry_17_text').style.display='none'; document.getElementById('landwash_entry_20_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_19_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_19_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_19_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 19, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_20_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_20_text').style.display='none';"></div>
	<div id="landwash_entry_20" onmouseover="document.getElementById('landwash_entry_20_text').style.display='block';
 document.getElementById('landwash_entry_18_text').style.display='none'; document.getElementById('landwash_entry_19_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_20_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_20_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_20_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 20, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_left">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_21_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_21_text').style.display='none';"></div>
	<div id="landwash_entry_21" onmouseover="document.getElementById('landwash_entry_21_text').style.display='block'; document.getElementById('landwash_entry_19_text').style.display='none'; document.getElementById('landwash_entry_22_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_21_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_21_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_21_text').style.display='none';"></div>
</div><?php endforeach; ?>


<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 21, 'category' => 5069 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div id="landwash_entry_right">
	<div id="entry_top" onmouseover="document.getElementById('landwash_entry_22_text').style.display='none';"></div>
	<div id="entry_left" onmouseover="document.getElementById('landwash_entry_22_text').style.display='none';"></div>
	<div id="landwash_entry_22" onmouseover="document.getElementById('landwash_entry_22_text').style.display='block';
 document.getElementById('landwash_entry_21_text').style.display='none'; document.getElementById('landwash_entry_20_text').style.display='none';"><?php echo get_the_post_thumbnail(); ?></div>
	<div id="landwash_entry_22_text"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><BR><BR>- - - -<BR><BR><?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author(); } ?><BR><I><?php the_time('F j, Y'); ?></i></div>
	<div id="entry_right" onmouseover="document.getElementById('landwash_entry_22_text').style.display='none';"></div>
	<div id="entry_bottom" onmouseover="document.getElementById('landwash_entry_22_text').style.display='none';"></div>
</div><?php endforeach; ?>







				

				
				<div id="indy_square_divider"></div>
				

				
					
				
				
				
				

				
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