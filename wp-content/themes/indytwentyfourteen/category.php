<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="indy_feature_singlepost">
	
		<?php if ( have_posts() ) : ?>
<div id="page_title" style="margin: -30px 0px 30px 0px;">			
				<h2><?php printf('<span>' . single_cat_title( '', false ) . '</span>' ); ?> Archives</h2></div>

<div id="indy_page_main">
<div id="page_list">
	<ul>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><span class="the_rest"><p class="the_rest">By: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?> | <?php the_time('F j, Y'); ?></span></li>

<?php endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>
</ul></div>
		<?php else : ?>
			
		<?php endif; ?>

<div id="related_box">
<div id="related_box_related">
	<h1>RELATED LINKS</h1>
		<ul>
<?php related_posts(); ?>
		</ul>
	<h1 style="margin: 0px 0px 10px 0px;">SHARE THIS PAGE</h1>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_digg_large' displayText='Digg'></span>
<span class='st_reddit_large' displayText='Reddit'></span>
	</div>
	<div id="related_box_ad"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 34, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>
	
	</div>	
				</div>

				
			</div>

			

		
		<div id="indy_right_column">
<h1>SEARCH</h1>

<div id="indy_search"><?php get_search_form(); ?></div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><?php echo get_post_meta($post->ID, "TEXTinSIDEBAR", true); ?><?php endwhile; ?>

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

<div id="indy_twitter">
				<div id="indy_handle">
				<a href="https://twitter.com/IndependentNL" target="_new">@IndependentNL</a> <a href="https://twitter.com/IndependentNL" target="_new"><img src="<?php bloginfo('url'); ?>/images/twitter_bird.png"></a> 
				</div>
			<?php global $post; $args = array(); $myposts = get_posts('p=35177'); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
			</div>

<p>*</p>


<div id="partner"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 36, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>




<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTheIndependentca%2F111983398876007&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;" allowTransparency="true"></iframe>


<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5054, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5055, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
<div id="sidebarslot">
<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5056, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
</div>
</div>
<?php get_footer(); ?>