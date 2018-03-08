
<?php
get_header(); 
if (have_posts()) : 
	while ( have_posts() ) : 
		the_post(); ?>
		<div class="under" data-under="10 head-floating-nav"></div>
		<div class="center">
			<h2 class="dark-blue no-padding">
				<?php the_title(); ?>
			</h2> 
			<?php
			the_date("l, F j, Y");
			echo " at "; 
			the_time();
			echo " by"; ?>
			<a class="no-padding" href="<?= get_the_author_link(); ?>">
				<strong><?php the_author();?></strong>
			</a>
			<?php 
			the_content();
			?> 
		</div> <?php
	endwhile; 
else: ?> 
	<h3 class="dark-blue">
		<?php echo "Sorry, it looks like this post does not exist.";?>
	</h3>
	<?php
endif;
?>
<?php
get_footer(); ?>