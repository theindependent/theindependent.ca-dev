<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<a name="t" style="position:absolute;top:260px;"></a>

	<div id="indy_feature_singlepost">

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="page_title">
		<h1><?php the_title(); ?></h1>
	</div>
				
				
	


	<div id="indy_page_main">

		<?php the_content(); ?>
		<?php endwhile; ?>
 <?php endif; ?>

<?php if (is_page( 'gitest' )): ?>
	<?php echo the_permalink() ?>
	<p>-------</p>
	<?php echo get_bloginfo('wpurl') ?>
	<?php echo get_bloginfo('url') ?>
	<?php echo get_bloginfo('charset') ?>
	
	<div class="help-boxes">
		<div class="big-text title">Like this article? <span id="help-boxes-title">Help us publish more like it.</span></div>
		<div class="main-box">
			<div class="head">
				<div class="big-text"><span id="share-count"><?php echo facebook_page_like_count( get_permalink() ) ?></span></div>
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
				<img src="http://theindependent.ca/wp-content/uploads/2015/11/PinkCOD.jpg" class="help-box-icon cod">
			</div>
			<div class="box-break"></div>
			<div class="body">
				<div class="box-header-text">GIVE US A FISH</div>
				<div class="help-box-text">
					As a non-profit media outlet, one-time donations are also a big help. Thanks!
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
<?php endif; ?>	

<div id="related_box">
<div id="related_box_related">
	<h1 style="margin: 20px 0px 10px 0px;">SHARE THIS PAGE -</h1>
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

<?php if (!(is_page( 'goindy2015' ))): ?>

<h2>SEARCH</h2>
<div id="indy_search"><?php get_search_form(); ?></div>

<?php if( function_exists( 'mc4wp_form' ) ) {
	mc4wp_form();
} ?>

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

<?php else: ?>

<div style="text-align:center;width:200px;border:2px solid;border-radius:5px;margin-left:auto;margin-right:auto">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="font-weight:bold;">
<input type="hidden" name="cmd" value="_s-xclick"><br>
<input type="hidden" name="hosted_button_id" value="W6TW428FX6CYL"><br>
<input type="hidden" value="#GoIndy2015 with" name="on3"><span style="font-family:Andada;font-weight:700;font-size:24px;">Give</span><br>
<select name="os0" style="width: 140px;height: 34px;overflow: hidden;border: 1px solid #ccc;font-family:Georgia;font-weight:bold;font-size:16px;">
	<option value="One">$1.00</option>
	<option value="Two">$2.00</option>
	<option value="Three">$3.00</option>
	<option value="Five">$5.00</option>
	<option value="lucky 7">$7.77</option>
	<option value="Ten" selected="selected">$10.00</option>
	<option value="Fifteen">$15.00</option>
	<option value="GoIndy">$20.15</option>
	<option value="Thirty">$30.00</option>
	<option value="Fifty">$50.00</option>
</select><br>
<span style="font-family:Andada;font-weight:700;font-size:24px;">per month.</span>
<p style="margin-top:0px;">
<input type="hidden" name="currency_code" value="CAD"><br>
<input type="submit" value="Donate" src="http://theindependent.ca/wp-content/uploads/2015/01/goindy_donatebutton_red.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="margin-top:3px;width:180px;border-radius:5px;background:red;font-family:Andada;color:white;font-size:26px;font-weight:900;"><br>
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</p>
</form>
<p><a href="http://theindependent.ca/donate?donation=donate">Click here if you would like to make a one-time donation instead.</a></p>

</div>
</div>
</div>
<?php endif; ?>
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