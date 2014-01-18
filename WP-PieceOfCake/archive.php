<?php get_header(); ?>
<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="two-thirds box clearfix">


	<?php if (is_category()) { ?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
		</h2>

	<?php } elseif (is_tag()) { ?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
		</h2>

	<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
				?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>
		</h2>

	<?php } elseif (is_day()) { ?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
		</h2>

	<?php } elseif (is_month()) { ?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
		</h2>

	<?php } elseif (is_year()) { ?>
		<h2 class="archive-title h2">
			<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
		</h2>

	<?php } ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
			<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

			<p class="byline vcard"><?php printf(__( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'bonestheme' )), bones_get_the_author_posts_link(), get_the_category_list(', '));?></p>

			<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

			<p><?php the_excerpt(); ?></p>
		</div>


	<?php endwhile; ?>

	<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
		<?php bones_page_navi(); ?>
		<?php } else { ?>
			<nav class="wp-prev-next">
			<ul class="clearfix">
				<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
				<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
			</ul>
			</nav>
		<?php } ?>

		<?php else : ?>

		<div id="post-not-found" class="hentry clearfix">
			<h2><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h2>
			<div class="entry-content">
				 <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</div>
			<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
		</div>

		<?php endif; ?>

		</div><!-- End of two-thirds-->

		<?php get_sidebar(); ?>
</article>
</section>

<?php get_footer(); ?>
