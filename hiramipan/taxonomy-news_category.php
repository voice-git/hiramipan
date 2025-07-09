<?php 
$home = esc_html(home_url('/'));
$recruit = esc_html(home_url('/recruit/'));
$news = esc_html(home_url('/news/'));
?>
<?php get_header(); ?>
    <main>
        <div class="l-pageTitle">
            <div class="p-pageTitle">
                <div class="p-pageTitle__inner l-inner">
                    <div class="p-pageTitle__title">
                        <hgroup class="c-title ">
                            <p class="c-title__en en">NEWS</p>
                            <h2 class="c-title__ja">ひらみぱん通信</h2>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
        <section class="l-archive">
            <div class="p-archive">
                <div class="p-archive__inner l-inner">
                    <?php
                        $current_term = get_queried_object(); 
                    ?>
                    <ul class="p-archive__tabs">
                        <li class="p-archive__tab">
                            <a href="<?php echo $news; ?>"><span>新着</span></a>
                        </li>
                        <li class="p-archive__tab <?php if ($current_term && $current_term->slug === 'event') echo 'is-active'; ?>">
                            <a href="<?php echo esc_html(home_url('/news_category/event/')); ?>"><span>催事</span></a>
                        </li>
                        <li class="p-archive__tab <?php if ($current_term && $current_term->slug === 'brasserie') echo 'is-active'; ?>">
                            <a href="<?php echo esc_html(home_url('/news_category/cafe/')); ?>"><span>カフェ</span></a>
                        </li>
                        <li class="p-archive__tab <?php if ($current_term && $current_term->slug === 'vagabond') echo 'is-active'; ?>">
                            <a href="https://hiramipan.com/vagabond/index.html" target="_blank"><span>バガボンド</span></a>
                        </li>
                        <li class="p-archive__tab <?php if ($current_term && $current_term->slug === 'sales') echo 'is-active'; ?>">
                            <a href="<?php echo esc_html(home_url('/news_category/sales/')); ?>"><span>移動販売</span></a>
                        </li>
                        <li class="p-archive__tab <?php if ($current_term && $current_term->slug === 'other') echo 'is-active'; ?>">
                            <a href="<?php echo esc_html(home_url('/news_category/other/')); ?>"><span>その他</span></a>
                        </li>
                    </ul>
                    <?php if (have_posts()): ?>
                    <div class="p-archive__cards">
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="p-archive__card" id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>" class="c-card">
                                <picture class="c-card__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/noimage.webp" alt="">
                                <?php endif; ?>
                                </picture>
                                <time datetime="<?php echo get_the_date('Y.m.d') ?>" class="c-card__time"><?php echo get_the_date('Y.m.d') ?></time>
                                <div class="c-card__title"><p><?php the_title(); ?></p></div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="p-archive__nav">
                        <?php the_posts_pagination(
                            array(
                                'prev_text' => '<img src="'.get_template_directory_uri().'/assets/images/common/arrow2.svg" alt="前へ"/>',
                                'next_text' => '<img src="'.get_template_directory_uri().'/assets/images/common/arrow2.svg" alt="次へ"/>',
                                'show_all' => false,
                                'end_size' => 1,
                                'mid_size' => 1,
                            )
                        ); ?>
                    </div>
                    <?php endif; ?>
                    <div class="p-archive__bnr">
                        <?php get_template_part('./template-part/banner'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>