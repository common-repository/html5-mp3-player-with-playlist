<?php
/**
 * The Template for displaying all html5taps
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
include_once("functions.php");

$meta = get_post_meta( get_the_ID() ); 

get_header(); ?>

	<div align="center" class="page-content">
		<div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', get_post_format() ); ?>

				<?php echo jsWidget('https://player.html5tap.com/v1/html5full.html?jdata='.urlencode(get_the_permalink(get_the_ID())) ); ?>
                     
         <br /> <br />
         
         
         <?php the_content(); ?>
         
         <h3>Embed Information</h3><br/>

			<?php
            $embedFull =  htmlentities(jsWidget('https://player.html5tap.com/v1/html5full.html?jdata='.urlencode(get_the_permalink(get_the_ID())) ) );
            
            
            
            $embedBig =  htmlentities(jsWidget('https://player.html5tap.com/v1/html5big.html?jdata='.urlencode(get_the_permalink(get_the_ID())), 347, 414) );
            
            //echo '<em>Adjust iFrame Width & Height to fit on page.</em>';
            echo '<textarea style="width: 50%;" cols="70" rows="3" name="embed">'.$embedFull.'</textarea>';
            echo "<div>&nbsp;</div>";
            echo '<textarea style="width: 50%;" cols="70" rows="3" name="embed">'.$embedBig.'</textarea>';
            ?>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
            

		</div><!-- #content -->
	</div><!-- #primary -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>