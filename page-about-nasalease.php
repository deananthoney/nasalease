<?php
/**
 * Template Name: About Nasal Ease page
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>





		<div id="container" class="one-column">
			<div id="content" role="main">
            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
<div class="title1">
<h1>How does Nasal Ease work?</h1>                 
</div>
<div class="galleryimages"> 
<ul id="images">
<li><a href="/about-nose">
<img src="images/about-nose.png" title="about-nose" alt="about-nose" style="padding-bottom:26px;"></a></li>
<li><a href="images/about-nasal-microsoftcellulose.png" title="about-nasal-microsoftcellulose" alt="about-nasal-cellose"  style="padding-bottom:9px;"></a></li>
<li><a href="about-nasalease-nasalbreathe">
<img src="images/about-nasal-microsoftcellulose.png" title="about-nasalease-nasalbreathe" alt="about-nasalease-nasalbreathe"  style="padding-bottom:26px;"></a></li>
<li><a href="about-micosoftcellulose">
<img src="images/about-nasal-microcelluse.png" title="about-nasal-microcellose" alt="about-nasal-microcellose"></a></li>
<li><a href="about-nasalease-nasalbreathe">
<img src="images/about-nasalease-nasalbreathe.png" title="about-nasal-microcellose" alt="about-nasal-microcellose"></a></li>
</ul>
</p>

<div>


            <div class="image">
                      						<?php the_content(); 
											
											
											
											
											?>

        </div> 
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>


<div class="paragraph1">
<div class="askperson">
<img src="images/about-ask.png"/>
</div>
<h2>Nasal Ease works by targeting airborne allergens<br/>in the nose where they attack!</h2>
</div>

<div class="paragraph2">
<div class="boxart">
<img src="images/about-nasaleasebox.png"/>
</div>
<div class="body">
<h2>NASAL EASE ALLERGY RELIEVER <br/>IS THE ONLY HOMEOPATHIC POWDER SPRAY</h2>

<p>that delivers effective relief of airborne allergy symptoms like sneezing,sinus congestion, and runny nose, without harmful ingredients like zinc.</p>
<p>Our unique, patented powder spray delivery system sends Nasal Ease's allergy fighting ingredients directly into the nose where allergens attack!</p>
<p>Nasal Ease is safe to use in conjunction with OTV and Rx allergy medications, does not promote drowsiness, has no rebound effect, and is non-habit forming.</p>
<p>Nasal Ease is easy to travel with in pocket or purse.No leakage worries!</p>
<p>Each bottle of Nasal Ease contains 200 doses.So even without any 
harmful or harsh ingredients a little Nasal Ease goes a long way toward helping relieve your allergy symptoms.</p>
</div>
</div>
<div class="bottom1">
<ul>
<li><a href="#"/><span class="imagenext">FIND US AT WALGREENS STORES OR BUY NOW AT<span/></a></li>
<li><a href="#"><img src="images/logo-walgreens.png"/></a></li>
<li><a href="#"><img src="images/logo-drugstore.jpg"/></a></li>
</ul>
</div>
			</div><!-- #content -->
		</div><!-- #container -->
</div>
</div>

<?php get_footer(); ?>