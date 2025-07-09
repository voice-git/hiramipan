<?php get_header(); ?>

<!-- メインコンテンツのループ -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div><?php the_excerpt(); ?></div>
<?php endwhile; else : ?>
    <p>投稿が見つかりません。</p>
<?php endif; ?>

<?php get_footer(); ?>