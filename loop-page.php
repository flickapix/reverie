<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	
	        <div class="reveriePagination">
        
               <?php reverie_page_links();?>
          
            </div><!-- / reverie-pagination -->

<?php endwhile; // End the loop ?>