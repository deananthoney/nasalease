<?php
/**
 * Template Name: Game Nasal Ease page
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<script ="text/javascript">
    jQuery('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
</script>


<div id="product"><img src="<?php bloginfo('template_url') ?>/images/sidebar-product.png" /></div>

		<div id="container" class="one-column">
			<div id="content" role="main">
            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
            <div class="image">
                      						<?php the_content(); ?>

        </div> 
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>

<ul id="home-info">
<li id="about-nasal-ease">
<h4>About Nasal Ease</h4>
<p>As we all know, allergies are tough!  But now, you can be tougher with new Nasal Ease!!  Whether indoor or outdoor allergies are beating you up, here you'll find everything you need to fight back, and feel like yourself again.<br />  <a href="<?php bloginfo('url') ?>/about-nasal-ease/">read more to find out <br /> how nasal ease works</a></p>
</li> 
<li id="benefits">
<h4>Benefits</h4>
<ul class="benefits">
<li>- The only nasal powder spray that delivers effective relief of airborne allergy symptoms like sneezing, sinus congestion, and runny nose, without harmful ingredients like zinc. </li>
<li>- A patented powder spray delivery system that sends unique allergy fighting ingredients directly into the nose where allergens attack! </li>
<li>-Non-habit forming, does not promote drowsiness, contains a unique homeopathic ingredient, and is safe to use with OTC and Rx allergy medications.</li>
</ul>
</li> 
<li id="testimonials">
<h4>Testimonials</h4>
<p>"Thank you, Nasal Ease!  The ragweed this Fall was killer for me.  But then I found Nasal Ease in my local Walgreens – and it saved me!  Helped my stuffiness and sneezing so I felt like myself.  Awesome!!"<br />
- <em>Penny L. Stamford, CT</em><br /> <a href="<?php bloginfo('url') ?>/contact-us/">CLICK FOR MORE <br /> <span class="tell-us"> Tell us about YOUR Nasal Ease experience!</span></a>
</p>
</li> 
</ul>
<ul id="bottom-content">
<li><a href="<?php bloginfo('url') ?>/commercial-ad/"><img src="<?php bloginfo('template_url') ?>/images/home-commercial-ad.jpg" /></a></li>
<li><a href="<?php bloginfo('url') ?>/game/"><img src="<?php bloginfo('template_url') ?>/images/home-game.jpg" /></a></li>
<li><a href="<?php bloginfo('url') ?>/ask-al/"><img src="<?php bloginfo('template_url') ?>/images/home-allergy-questions.jpg" /></a></li>
<li class="find-us"><a href="#"><img src="<?php bloginfo('template_url') ?>/images/home-find-us.jpg" /></a>
<a href="#"><img src="<?php bloginfo('template_url') ?>/images/logo-walgreens.jpg" /></a>
<a href="#"><img src="<?php bloginfo('template_url') ?>/images/logo-drugstore.jpg" /></a></li>

</ul>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>