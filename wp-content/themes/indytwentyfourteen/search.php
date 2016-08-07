<?php get_header(); ?>

<div id="indy_feature_singlepost">
	<div id="page_title">
		<h1>Search</h1>
	</div>
				
				
	


	<div id="indy_page_main2">
		

<?php if ( have_posts() ) : ?>

<h2><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2>


			

<div id="search_list">
<ul>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<li><a style="font-size: 17px; font-weight: normal; font-family: georgia;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<div style="color: #404040;"><?php the_excerpt();?>
			<small><I>Published on <?php the_time('F j, Y'); ?> by <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?></i></small></div>
			<?php endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>
</ul>
</div>
			

		<?php else : ?>

					<h2><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h2>
			

				
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					

		<?php endif; ?>

		


		

				</div>

				
			</div>

			

		
		<?php echo get_post_meta($post->ID, 'Sidebar', true); ?>

<div id="indy_right_column">
<h1>SEARCH</h1>
<div id="indy_search"><?php get_search_form(); ?></div>

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
<?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=weekly&order_by=views&cat=-34,-48,-36,-1463,-5016,-5034,-5035,-5036,-46,-5242&stats_comments=0&post_type='post,landwash_post'&wpp_start=' '&post_html='<li><a href='{url}'>{text_title}</a></li>'&limit=5&range=daily"); ?>
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




<div id="partner"><h1>&nbsp;PARTNER</h1><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 36, 'orderby' => rand ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?></div>




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
