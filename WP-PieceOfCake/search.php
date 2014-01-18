<?php get_header(); ?>

<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="two-thirds box clearfix">

		<h2 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

			<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

			<p class="byline vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></p>

			<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

		</div>

		<?php endwhile; ?>

		<?php if (function_exists('bones_page_navi')) { ?>
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
			<h2><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h2>
			<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>

			<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
		</div>

		<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>

</article>
</section>

<?php get_footer(); ?>
