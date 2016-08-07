<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		var strongTags =	document.getElementsByTagName("STRONG");
		for (var i = 0;i<strongTags.length;i++) {
			if (strongTags[i].textContent.match(/Become\san\sIndy\ssupporter/)) {
				var childNodes = strongTags[i].childNodes;
				for (var j = 0;j<childNodes.length;j++) {
					strongTags[i].removeChild(childNodes[j]);
				}
				var children = strongTags[i].children;
				for (var j = 0;j<children.length;j++) {
					strongTags[i].removeChild(children[j]);
				}
			}
		}
	});
</script>

<div id="indy_feature_singlepost">

<div id="indy_banner_ad_post2">
			<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 48, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="indy_feature_preview_singlepost">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
				<div id="indy_sublines_singlepost">
				By: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?> | <?php the_time('F j, Y'); ?>
					<div id="indy_sharing">
						<div style="margin: 5px 0px 2px 0px;">
							<div style="float: left; margin: 0px; padding: 0px;"></div>
								<div style="float: left; margin: 0px; padding: 0px;">
									<?php dd_twitter_generate('Normal','IndependentNL') ?>
								</div>
								<div style="float: left; margin: 0px; padding: 0px; width: 70px; overflow: hidden;">
									<?php dd_google1_generate('Compact (20px)') ?>
								</div>
								<div style="float: left; margin: 0px; padding: 0px;">
									<?php dd_fblike_generate('Recommend Button Count') ?></div>
								</div>
							</div>
		</div>		

				<div id="indy_text_singlepost">
					<p><?php the_excerpt(); ?></p>
					</div>



<?php if(in_category('5')){ ?>

<div id="opinion_promote">
<div id="author_bio_photo_opinion">	
<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 400 ) ); ?></div>
<div id="opinion_text"><?php
foreach((get_the_category()) as $childcat) {
if (cat_is_ancestor_of(5, $childcat)) {
echo $childcat->category_description;
}}
?>
<BR><BR>
<a href="<?php
foreach((get_the_category()) as $childcat) {
if (cat_is_ancestor_of(5, $childcat)) {
echo get_category_link($childcat);
}}
?>"> > Other Posts in this Column</a>
</div>
</div>
<?php }?>




</div>
				<div id="indy_feature_photo_singlepost"><?php if ((has_post_thumbnail( $post->ID ))&&(!in_category( '5685' )) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><a href="<?php echo $image[0]; ?>" rel="lightbox"><img src="<?php echo $image[0]; ?>"></a><?php endif; ?><h5><?php if (get_post_meta($post->ID, 'Photo Credit', true) != "") { echo get_post_meta($post->ID, 'Photo Credit', true); } ?></h5></div><?php endwhile; ?>
				
	


	<div id="indy_single_main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
	<div class="help-boxes">
		<div class="big-text title">Like this article? <span id="help-boxes-title">Help us publish more like it.</span></div>
		<div class="main-box">
			<div class="head">
				<div class="big-text"><span id="share-count"><span id="share-count"><?php echo facebook_page_like_count( get_permalink() ) ?></span></div>
				<div id="shares">Shares</div>
			</div>
			<div class="box-break"></div>
			<div class="body">
				<div class="box-header-text">SPIN A YARN</div>
				<div class="help-box-text">
					Help spread important ideas and perspectives throughout N.L. and beyond.
				</div>
			<div>
				<span class='st_facebook_large share-button' displayText='Facebook'></span>
				<span class='st_twitter_large share-button' displayText='Tweet'></span>
				<span class='st_email_large share-button' displayText='Email'></span>
			</div>
			</div>
		</div>
		<div class="main-box">
			<div class="head">
				<img src="http://theindependent.ca/wp-content/uploads/2015/12/PinkCOD.jpg" class="help-box-icon cod" style="height: 50px; margin-top: 25px;">
			</div>
			<div class="box-break"></div>
			<div class="body">
				<div class="box-header-text">GIVE US A FISH</div>
				<div class="help-box-text">
					As a non-profit media outlet, one-time donations are also a big help.
				</div>
				<a  href="http://theindependent.ca/donate?donation=donate"><button class="submit-button">Donate</button></a>
			</div>
		</div>
		<div class="main-box">
			<div class="head">
				<img src="http://theindependent.ca/wp-content/uploads/2015/11/IndyFlags.jpeg" class="help-box-icon">
			</div>
			<div class="box-break"></div>
			<div class="body">
				<div class="box-header-text">TEACH US TO FISH</div>
				<div class="help-box-text">
					Contribute what you can each month to sustain The Independent.
				</div>
				<a href="http://theindependent.ca/donate?donation=join"><button class="submit-button">Join</button></a>
			</div>
		</div>
	</div>
<div id="related_box">
<div id="related_box_related">
	<h1>RELATED LINKS</h1>
		<ul>
<?php related_posts(); ?><?php endwhile; ?>
		</ul>
	<h1 style="margin: 0px 0px 10px 0px;">SHARE THIS STORY -</h1>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_digg_large' displayText='Digg'></span>
<span class='st_reddit_large' displayText='Reddit'></span>
	</div>
	<div id="related_box_ad"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 34, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>
	
		
</div></div>

			</div>
<div id="indy_right_column">

	<?php if( function_exists( 'mc4wp_form' ) ) {
		mc4wp_form();
	} ?>

	<div id="popular_menus">
		<div id="popular_views">
		<div class="popular_menu">
			<ul>
			<li style="background: #E29636;"><a onmousedown="document.getElementById('popular_views').style.display='block'; document.getElementById('popular_shares').style.display='none';" style="color: white;">Popular</a>
			<li>&nbsp;<a onmousedown="document.getElementById('popular_views').style.display='none'; document.getElementById('popular_shares').style.display='block';">Recent</a>&nbsp;
			</ul>
		</div>
		<div class="popular_list">
			<ol>
<?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=weekly&order_by=views&cat=-34,-48,-36,-1463,-5016,-5034,-5035,-5036,-46,-5242,-5017&stats_comments=0&post_type='post,landwash_post'&wpp_start=' '&post_html='<li><a href='{url}'>{text_title}</a></li>'&limit=5&range=daily"); ?>
			</ol>
		</div>
		</div>
		
		<div id="popular_shares">	
		<div class="popular_menu">
			<ul>
			<li><a onmousedown="document.getElementById('popular_views').style.display='block'; document.getElementById('popular_shares').style.display='none';">Popular</a>
			<li style="background: #E29636;">&nbsp;<a onmousedown="document.getElementById('popular_views').style.display='none'; document.getElementById('popular_shares').style.display='block';" style="color: white;">Recent</a>&nbsp;
			</ul>
		</div>
		<div class="popular_list">
			<ol>
<?php
// replace 5 with the number of posts you want to show.
$aRecentPosts = new WP_Query("cat=29,3,3965,5015,1335,5&showposts=5");
while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><?php endwhile; ?>
			</ol>
		</div>
		</div>

	</div>
<h1>SEARCH</h1>
<div id="indy_search"><?php get_search_form(); ?></div>
<div id="indy_twitter">
				<div id="indy_handle">
				<a href="https://twitter.com/IndependentNL" target="_new">@IndependentNL</a> <a href="https://twitter.com/IndependentNL" target="_new"><img src="<?php bloginfo('url'); ?>/images/twitter_bird.png"></a> 
				</div>
			<?php global $post; $args = array(); $myposts = get_posts('p=35177'); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
			</div>


<p></p>

<div id="partner"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 36, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>




<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTheIndependentca%2F111983398876007&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;" allowTransparency="true"></iframe>

<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5054, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5055, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5056, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
</div>

<?php get_footer(); ?>