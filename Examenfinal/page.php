<?php

get_header();
?>
 
	<main >

		<?php
		while ( have_posts() ) :
			the_post();
			?>
 <div class="cabecera">
	
            <p class="main-title">
				<?php the_title()?></p>
            
        </div>
        <div class="content-page">	
           <?php the_content()?>

            
            </div>
			<?php
		endwhile; // End of the loop.
		?>
     </div>
	</main><!-- #main -->

<?php

get_footer();