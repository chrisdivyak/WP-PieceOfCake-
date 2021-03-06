<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="two-thirds box clearfix">

	<h2 class="archive-title h2"><span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?></h2>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

		<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<p class="byline vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' )), bones_get_the_author_posts_link(), get_the_term_list( get_the_ID(), 'custom_cat', "" ) );
									?></p>
		<?php the_excerpt( '<span class="read-more">' . __( 'Read More &raquo;', 'bonestheme' ) . '</span>' ); ?>

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

		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>

		<p><?php _e( 'This is the error message in the taxonomy-custom_cat.php template.', 'bonestheme' ); ?></p>
	</div>
    <?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

</article>
</section>

<?php get_footer(); ?>
