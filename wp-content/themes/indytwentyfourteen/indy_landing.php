<?php
/*
Template Name: INDY Landing
*/
?>

<?php get_header(); ?>

	<div id="indy_feature">
		<div id="indy_feature_photo">
					<div id="fp1"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5020 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><?php endforeach; ?></div>
					<div id="fp2"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5021 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><?php endforeach; ?></div>
					<div id="fp3"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5022 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><?php endforeach; ?></div>
					<div id="fp4"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5023 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><?php endforeach; ?></div>
					<div id="fp5"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5027 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a><?php endforeach; ?></div>
		</div>
			<div class="indy_story_option" onmouseover="document.getElementById('fp1').style.display='block'; document.getElementById('fp2').style.display='none'; document.getElementById('fp3').style.display='none'; document.getElementById('fp4').style.display='none'; document.getElementById('fp5').style.display='none';">
				<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5020 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div class="indy_story_image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
				<div class="indy_story_text">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo get_post_meta($post->ID, 'FeaturedArticleLine', true); ?></p><?php endforeach; ?>
					</div>
				</div>
			<div class="indy_story_option" onmouseover="document.getElementById('fp1').style.display='none'; document.getElementById('fp2').style.display='block'; document.getElementById('fp3').style.display='none'; document.getElementById('fp4').style.display='none'; document.getElementById('fp5').style.display='none';">
				<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5021 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div class="indy_story_image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
				<div class="indy_story_text">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo get_post_meta($post->ID, 'FeaturedArticleLine', true); ?></p><?php endforeach; ?>
					</div>
				</div>
			<div class="indy_story_option" onmouseover="document.getElementById('fp1').style.display='none'; document.getElementById('fp2').style.display='none'; document.getElementById('fp3').style.display='block'; document.getElementById('fp4').style.display='none'; document.getElementById('fp5').style.display='none';">
				<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5022 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div class="indy_story_image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
				<div class="indy_story_text">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo get_post_meta($post->ID, 'FeaturedArticleLine', true); ?></p><?php endforeach; ?>
					</div>
				</div>
			<div class="indy_story_option" onmouseover="document.getElementById('fp1').style.display='none'; document.getElementById('fp2').style.display='none'; document.getElementById('fp3').style.display='none'; document.getElementById('fp4').style.display='block'; document.getElementById('fp5').style.display='none';">
				<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5023 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div class="indy_story_image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
				<div class="indy_story_text">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo get_post_meta($post->ID, 'FeaturedArticleLine', true); ?></p><?php endforeach; ?>
					</div>
				</div>
			<div class="indy_story_option" onmouseover="document.getElementById('fp1').style.display='none'; document.getElementById('fp2').style.display='none'; document.getElementById('fp3').style.display='none'; document.getElementById('fp4').style.display='none'; document.getElementById('fp5').style.display='block';">
				<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5027 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div class="indy_story_image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
				<div class="indy_story_text">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php echo get_post_meta($post->ID, 'FeaturedArticleLine', true); ?></p><?php endforeach; ?>
					</div>
				</div>
	


	<div id="indy_second_features">
			<div id="indy_banner_ad">
			<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 48, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><?php the_content(); ?><?php endforeach; ?>
			</div>
				

				<div id="indy_square_1">
					<h1 class="square_header">NEWS<div id="indy_more"><a href="<?php bloginfo('url'); ?>/news">&#8594; More in News</a></div></h1>
						

						<?php global $post; $args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 1335 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="square_box">
							<div class="square_image">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
								<div class="indy_story_text" style="width: 275px;">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h3>By: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?> | <?php the_time('F j, Y'); ?></h3>							<p><?php echo substr(get_the_excerpt(), 0,75); ?>...</p></div></div><?php endforeach; ?>					
					</div>

				<div id="indy_square_2">
					<h1 class="square_header">OPINION<div id="indy_more"><a href="<?php bloginfo('url'); ?>/opinion">&#8594; More in Opinion</a></div></h1>
						
						<?php global $post; $args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 5 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><h2><a href="<?php the_permalink(); ?>">
						<div class="square_box">
							<div class="square_author">
								<a href="<?php the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 60 ) ); ?></a></div>
								<div class="indy_story_text" style="width: 300px;">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<h3>By: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?> | <?php the_time('F j, Y'); ?></h3>
									<p style="font-weight: normal;"><?php echo substr(get_the_excerpt(), 0,75); ?>...</p>
									</div></div><?php endforeach; ?>
					</div>
				
				<div id="indy_square_divider"></div>
				
				
				<div id="indy_square_4">
					<h1 class="square_header">LETTERS<div id="indy_more"><a href="<?php bloginfo('url'); ?>/letters">&#8594; More in Letters</a></div></h1>
						<div id="indy_letter">
						<div class="indy_story_text" style="width: 370px;">
						<?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 5015 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3>From: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?><BR><?php the_time('F j, Y'); ?></h3>
						<p style="margin: 20px 0px 0px 0px; font-size: 11px;"><?php the_excerpt() ?> <a href="<?php the_permalink(); ?>"><I>+ More</a></i></p><?php endforeach; ?>
						</div>
					</div>
				</div>
					
				
				<div id="indy_square_7" style="width: 370px;">
					<div id="partner_box_ad"><?php global $post; $args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 34, 'orderby' => 'rand' ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?><div id="boxer_ad"></div>
						<?php the_content(); ?>
					</div><?php endforeach; ?>
				</div>
				
				<div id="indy_square_8">
					<h1 class="square_header">#GoIndy2015<div id="indy_more"><a href="<?php bloginfo('url'); ?>/goindy2015">Lets go &#8594;</a></div></h1>
						

						<?php global $post; $args = array( 'numberposts' => 3, 'offset'=> 0, 'category' => 5685 ); $myposts = get_posts( $args ); ?><?php foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="square_box">
							<div class="square_image">
								<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></div>
								<div class="indy_story_text" style="width: 275px;">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h3>By: <?php if (get_post_meta($post->ID, 'Guest Author Name', true) != "") {echo get_post_meta($post->ID, 'Guest Author Name', true);} else {the_author_posts_link(); } ?> | <?php the_time('F j, Y'); ?></h3>							<p><?php echo substr(get_the_excerpt(), 0,75); ?>...</p></div></div><?php endforeach; ?>
				</div>
	<div id="indy_square_divider"></div>

				
			</div>


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




<?php get_footer() ?>