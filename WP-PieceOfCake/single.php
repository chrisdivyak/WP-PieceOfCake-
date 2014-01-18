<?php get_header(); ?>

<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="two-thirds box clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> itemscope itemtype="http://schema.org/BlogPosting">

	<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
	<p class="byline vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></p>

		<?php the_content(); ?>
		<?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

		<?php comments_template(); ?>

	</div>

	<?php endwhile; ?>
	<?php else : ?>

	<div id="post-not-found" class="hentry clearfix">
		<h2><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h2>
		<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>

		<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
	</div>

	<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

</article>
</section>

<?php get_footer(); ?>
