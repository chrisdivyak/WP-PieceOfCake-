<?php get_header(); ?>

<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="two-thirds box clearfix">


	<h2 class="archive-title h2"><?php post_type_archive_title(); ?></h2>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

			<p class="byline vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link());?></p>

			<?php the_excerpt(); ?>
	</div>

	<?php endwhile; ?>

	<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
		<?php bones_page_navi(); ?>

	<?php } else { ?>
	<div class="wp-prev-next">
		<ul class="clearfix">
			<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
			<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
		</ul>
	</div>
	<?php } ?>

	<?php else : ?>

	<div id="post-not-found" class="hentry clearfix">
		<h2><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h2>
		<div class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
		</div>
		<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
	</div>
	<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

</article>
</section>

<?php get_footer(); ?>
