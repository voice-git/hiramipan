<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main>
        <section class="l-single">
            <div class="p-single">
                <div class="p-single__inner l-inner">
                    <div class="p-single__main">
                        <?php if (has_post_thumbnail()) : ?>
                        <picture class="p-single__thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </picture>
                        <?php endif; ?>
                        <time datetime="<?php echo get_the_date('Y.m.d') ?>" class="p-single__time"><?php echo get_the_date('Y.m.d') ?></time>
                        <h1 class="p-single__title"><?php the_title(); ?></h1>
                        <div class="p-single__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="p-single__bnr">
                        <?php get_template_part('./template-part/banner'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>