<?php get_header(); ?>

<!-- 固定ページのコンテンツ -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>