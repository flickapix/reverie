<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php reverie_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
		
			<div class="reveriePagination">
        
               <?php reverie_page_links();?>
          
            </div><!-- / reverie-pagination -->
            
			<p><?php the_tags(); ?></p>
			
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>