<?php 
$home = esc_html(home_url('/'));
$recruit = esc_html(home_url('/recruit/'));
$news = esc_html(home_url('/news/'));
?>
<?php get_header(); ?>
    <main>
        <section class="l-mv">
            <div class="p-mv">
                <div class="p-mv__inner">
                    <div class="p-mv__slider js-mv-slider">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv1_sp.webp" media="(max-width:768px)" type="image/webp" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv1_sp.jpg" media="(max-width:767px)" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv1.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv1.jpg" alt="">
                        </picture>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv2_sp.webp" media="(max-width:768px)" type="image/webp" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv2_sp.jpg" media="(max-width:767px)" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv2.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv2.jpg" alt="">
                        </picture>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv3_sp.webp" media="(max-width:768px)" type="image/webp" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv3_sp.jpg" media="(max-width:767px)" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv3.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv3.jpg" alt="">
                        </picture>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv4_sp.webp" media="(max-width:768px)" type="image/webp" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv4_sp.jpg" media="(max-width:767px)" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv4.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv4.jpg" alt="">
                        </picture>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv5_sp.webp" media="(max-width:768px)" type="image/webp" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv5_sp.jpg" media="(max-width:767px)" />
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv5.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv5.jpg" alt="">
                        </picture>
                    </div>
                    <h2 class="p-mv__title c-blur js-animation">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv_ttl.png" alt="Artisan est Artiste">
                    </h2>
                </div>
            </div>
        </section>
        <section class="l-shopping">
            <div class="p-shopping">
                <div class="p-shopping__inner l-inner">
                    <div class="p-shopping__title">
                        <hgroup class="c-title ">
                            <p class="c-title__en en">SHOPPING</p>
                            <h2 class="c-title__ja">おかいもの</h2>
                        </hgroup>
                    </div>
                    <?php if(have_rows('product')): ?>
                    <ul class="p-shopping__lists">
                        <?php while(have_rows('product')): the_row(); ?>
                        <li class="p-shopping__list js-fade">
                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <picture class="p-shopping__img">
                                    <?php if(get_sub_field('img_sp')): ?>
                                    <source srcset="<?php the_sub_field('img_sp'); ?>" media="(max-width:767px)" />
                                    <?php endif; ?>
                                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('title'); ?>">
                                </picture>
                                <div class="p-shopping__content">
                                    <p class="p-shopping__name"><?php the_sub_field('title'); ?></p>
                                    <p class="p-shopping__text en"><?php the_sub_field('en_text'); ?></p>
                                    <p class="p-shopping__price"><?php the_sub_field('price'); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="l-message" id="message">
            <div class="p-message">
                <picture class="p-message__img">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_message_sp.webp" media="(max-width:767px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_message_sp.jpg" media="(max-width:767px)" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_message.webp" type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_message.jpg" alt="背景">
                </picture>
                <div class="p-message__inner l-inner">
                    <div class="p-message__content">
                        <div class="p-message__title js-animation c-blur">
                            <hgroup class="c-title --white">
                                <p class="c-title__en en">BON VOYAGE</p>
                                <h2 class="c-title__ja">ごあいさつ</h2>
                            </hgroup>
                        </div>
                        <div class="p-message__main">
                            <h3 class="p-message__subTitle js-animation c-blur">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/message_ttl.svg" alt="Artisan est Artiste." class="u-desktop">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/message_ttl_sp.svg" alt="Artisan est Artiste." class="u-mobile">
                            </h3>
                            <div class="p-message__text --white --center js-animation c-blur">
                                <p> ただのベーカリーにはなりたくないんです。<br> ひとつのくくりに縛られないで、<br> もっと自由に、気ままに、何かを表現<br class="u-mobile">していたい。<br> なぜパンやお菓子をつくっているか<br class="u-mobile">というと、<br class="u-desktop"> そこに思想を込められる<br class="u-mobile">からです。<br class="u-desktop"> 作り手の生き方を投影できる<br class="u-mobile">というか、<br class="u-desktop"> 言葉にできない感覚や心情を<br class="u-mobile">かたちにできるというか。 </p>
                                <p> わたしたちにとってパンやお店は<br> 絵本作家にとっての絵本であり、<br> 服飾デザイナーにとっての服と同じです。<br><br class="u-mobile"> ふつうのベーカリーらしくない<br class="u-mobile">物言いですけど、<br class="u-desktop"> 「世の中には<br class="u-mobile">ダサいパンとダサくないパンがある」。<br> そして、わたしたちは<br class="u-mobile">「ダサいパンはつくりたくない」。<br> それはきっと、音楽家がダサい楽曲は<br class="u-mobile">つくりたくない、<br class="u-desktop"> って心持ちと<br class="u-mobile">いっしょじゃないかと。 </p>
                                <p> ひらみぱんは、<br class="u-mobile">自分たちが表現したい何かを<br class="u-desktop"> 具象化<br class="u-mobile">していくためのブランドです。<br> わたしたちの思想や、<br class="u-mobile">感性や、思いつきや、ひらめきを、<br> 愉しんでもらえたらしあわせです。 </p>
                                <picture class="p-message__logo">
                                <source srcset="" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo_hirami.png" alt="ひらみぱん">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topNews">
            <div class="p-topNews">
                <div class="p-topNews__inner l-inner">
                    <div class="p-topNews__title">
                        <hgroup class="c-title --white">
                            <p class="c-title__en en">NEWS</p>
                            <h2 class="c-title__ja">ひらみぱん通信</h2>
                        </hgroup>
                    </div>
                    <ul class="p-topNews__tabs">
                        <li class="p-topNews__tab js-tab is-active"><span>新着</span></li>
                        <li class="p-topNews__tab js-tab"><span>催事</span></li>
                        <li class="p-topNews__tab js-tab"><span>カフェ</span></li>
                        <li class="p-topNews__tab"><a href="https://hiramipan.com/vagabond/index.html" target="_blank"><span>バガボンド</span></a></li>
                        <li class="p-topNews__tab js-tab"><span>移動販売</span></li>
                        <li class="p-topNews__tab js-tab"><span>その他</span></li>
                    </ul>
                    <div class="p-topNews__blocks c-blur js-animation">
                        <div class="p-topNews__block">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php endif; ?>
                        </div>
                        <div class="p-topNews__block u-hide">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_category', 
                                            'field' => 'slug',
                                            'terms' => 'event', 
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php else: ?>
                                <p class="u-none">まだ投稿がありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="p-topNews__block u-hide">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_category', 
                                            'field' => 'slug',
                                            'terms' => 'cafe', 
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php else: ?>
                                <p class="u-none">まだ投稿がありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="p-topNews__block u-hide">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_category', 
                                            'field' => 'slug',
                                            'terms' => 'vagabond', 
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php else: ?>
                                <p class="u-none">まだ投稿がありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="p-topNews__block u-hide">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_category', 
                                            'field' => 'slug',
                                            'terms' => 'sales', 
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php else: ?>
                                <p class="u-none">まだ投稿がありません。</p>
                            <?php endif; ?>
                        </div>
                        <div class="p-topNews__block u-hide">
                            <?php
                                $args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_category', 
                                            'field' => 'slug',
                                            'terms' => 'other', 
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                            <div class="p-topNews__cards">
                                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-topNews__card">
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
                            <?php else: ?>
                                <p class="u-none">まだ投稿がありません。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="p-topNews__btn">
                        <a href="<?php echo $news; ?>" class="c-btn">MORE</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topRecruit">
            <div class="p-topRecruit">
                <div class="p-topRecruit__inner l-inner">
                    <div class="p-topRecruit__content">
                        <div class="p-topRecruit__title">
                            <hgroup class="c-title --white">
                                <p class="c-title__en en">RECRUITMENT</p>
                                <h2 class="c-title__ja">スタッフ募集</h2>
                            </hgroup>
                        </div>
                        <p class="p-topRecruit__text --center --white c-blur js-animation"> 一緒に働いてくださる方を<br class="u-mobile">募集しています。<br> お電話または採用フォームから、<br class="u-mobile">ぜひお問い合わせください。 </p>
                        <div class="p-topRecruit__btn">
                            <a href="<?php echo $recruit; ?>" class="c-btn">詳しい採用情報へ</a>
                        </div>
                    </div>
                </div>
                <picture class="p-topRecruit__bg">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_recruit_sp.webp" media="(max-width:767px)" type="image/webp" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_recruit_sp.png" media="(max-width:767px)" />
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_recruit.webp" type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg_recruit.png" alt="背景">
                </picture>
            </div>
        </section>
        <section class="l-gallery">
            <div class="p-gallery">
                <div class="p-gallery__inner l-inner">
                    <h2 class="p-gallery__title --center en">GALERIE</h2>
                    <div class="p-gallery__img">
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_01.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_02.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_03.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_04.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_05.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_06.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_07.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_08.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_09.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_10.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_11.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_12.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_13.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_14.jpg" alt="ギャラリー">
                        </picture>
                        <picture class="js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_15.jpg" alt="ギャラリー">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-about" id="about">
            <div class="p-about">
                <div class="p-about__inner l-inner">
                    <div class="p-about__title">
                        <hgroup class="c-title --white">
                            <p class="c-title__en en">ABOUT</p>
                            <h2 class="c-title__ja">会社概要</h2>
                        </hgroup>
                    </div>
                    <div class="p-about__wrap js-fade">
                        <div class="p-about__info --white"> 会社名&emsp;株式会社ひらみぱん<br>
                            <a href="https://maps.app.goo.gl/b72oe8jquSuVxrT59" rel="noopener noreferrer" target="_blank"> 所在地&emsp;〒920-0865<br> 石川県金沢市長町1丁目6-11 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ex_link.svg" alt="外部リンク">
                            </a><br> 電話番号&emsp;076-221-7831<br> 設立&emsp;2017年9月1日<br> 資本金&emsp;200万円<br> 代表者&emsp;平見高広<br> 事業内容&emsp;飲食店の運営
                        </div>
                        <div class="p-about__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6408.986068524417!2d136.651047!3d36.566335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8337c18167dd9%3A0x9e1d51ab3e4d124!2z44Gy44KJ44G_44Gx44KT!5e0!3m2!1sja!2sus!4v1725266437168!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-history">
            <div class="p-history">
                <div class="p-history__inner l-inner">
                    <div class="p-history__title">
                        <hgroup class="c-title ">
                            <p class="c-title__en en">HISTORY</p>
                            <h2 class="c-title__ja">ひらみぱんの歴史</h2>
                        </hgroup>
                    </div>
                    <div class="p-history__text --center js-fade">
                        <p> 2011年 3月 金沢市長町にて創業　<br class="u-mobile">ぱんとお昼と喫茶 ひらみぱんオープン<br> 2011年 9月 ブラッスリー・カフェ <br class="u-mobile">ひらみぱん長町本店の名称を変更<br> 2012年 11月 金沢市袋町　ブーランジュリー <br class="u-mobile">あとりえひらみぱんオープン<br> 2013年 8月 ブーランジュリー <br class="u-mobile">あとりえひらみぱん店舗統合のため閉店<br> 2015年 2月 Bistro ひらみぱん長町本店の名称を変更<br> 2017年 3月 金沢市高岡町　ひらみぱん Crêperie <br class="u-mobile">Intimeオープン　同店厨房内にパン工房を備える<br> 2017年 7月 Crêperie Intime ２階ひらみぱん<br class="u-mobile">Galerie Au Quotidienオープン<br> 2018年 4月 金沢市高岡町　PIZZA BUDDHA GORILLA<br class="u-mobile">プレオープン<br> 2018年 5月 ひらみぱん Galerie Au Quotidien<br class="u-mobile">店舗リニューアルのため閉廊<br> 2018年 9月 石窯ひらみぱん PIZZA BUDDHA GORILLA<br class="u-mobile">グランドオープン<br> 2018年10月 ひらみぱん Crêperie Intime<br class="u-mobile">リニューアルオープン<br> 2022年 5月 Boulangerie et Bistro <br class="u-mobile">ひらみぱん長町本店の名称を変更 </p>
                    </div>
                    <div class="p-history__bnr">
                        <?php get_template_part('./template-part/banner') ?>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/float'); ?>
    </main>
<?php get_footer(); ?>