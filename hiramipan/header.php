<?php 
$home = esc_html(home_url('/'));
$recruit = esc_html(home_url('/recruit/'));
$news = esc_html(home_url('/news/'));
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CM03N41R7L"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'G-CM03N41R7L');
	</script>
	<meta name="google-site-verification" content="CVjB1jnFt9MXBIxjOGVFzovsE7GMhjzckemOR5aPnmg" />
	<script type="text/javascript">
	    (function(c,l,a,r,i,t,y){
	        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
	        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
	        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
	    })(window, document, "clarity", "script", "g4qq8j4g96");
	</script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <?php if(is_front_page()): ?>
        <div class="p-header">
            <div class="p-header__inner l-inner">
                <div class="p-header__nav">
                    <nav class="p-globalNav">
                        <ul class="p-globalNav__lists">
                            <li class="p-globalNav__list">
                                <a href="<?php echo $home; ?>#message"><span class="en">BON VOYAGE</span>ごあいさつ</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="https://shop.hiramipan.co.jp/" target="_blank"><span class="en">SHOPPING</span>おかいもの</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $news; ?>"><span class="en">NEWS</span>ひらみぱん通信</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <h1 class="p-header__logo">
                    <a href="<?php echo $home; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="ひらみぱんのロゴ">
                    </a>
                </h1>
                <div class="p-header__nav">
                    <nav class="p-globalNav">
                        <ul class="p-globalNav__lists">
                            <li class="p-globalNav__list">
                                <a href="<?php echo $news; ?>event/"><span class="en">EVENT</span>催事</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $recruit; ?>"><span class="en">RECRUIT</span>採用情報</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $home; ?>#about"><span class="en">ABOUT</span>わたしたちのこと</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="p-header__hamburger">
                    <div class="c-hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="p-header__drawer">
                    <div class="p-drawer">
                        <div class="p-drawer__inner">
                            <div class="p-drawer__logo">
                                <a href="<?php echo $home; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="ひらみぱんのロゴ">
                                </a>
                            </div>
                            <nav class="p-drawer__nav">
                                <ul class="p-drawer__links">
                                <li class="p-drawer__link">
                                        <a href="<?php echo $home; ?>#message">
                                            <span class="en">BON VOYAG</span>ごあいさつ </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="https://shop.hiramipan.co.jp/" target="_blank">
                                            <span class="en">SHOPPING</span>おかいもの </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $news; ?>">
                                            <span class="en">NEWS</span>ひらみぱん通信 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $news; ?>event/">
                                            <span class="en">EVENT</span>催事 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $recruit; ?>">
                                            <span class="en">RECRUIT</span>採用情報 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $home; ?>#about">
                                            <span class="en">ABOUT</span>わたしたちのこと </a>
                                    </li>
                                </ul>
                                <div class="p-drawer__btn">
                                    <a href="https://shop.hiramipan.co.jp/" target="_blank">
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn_onlineshop.jpg" alt="オンラインショップ">
                                        </picture>
                                    </a>
                                </div>
                                <div class="p-drawer__btn">
                                    <a href="<?php echo $news; ?>sales/">
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn_schedule.svg" alt="ひらみぱんの移動販売の年間スケジュール">
                                        </picture>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="p-sub-header <?php if(!is_front_page()): ?>is-active<?php endif; ?>">
            <div class="p-sub-header__inner l-inner">
                <div class="p-sub-header__nav">
                    <nav class="p-globalNav">
                        <ul class="p-globalNav__lists">
                            <li class="p-globalNav__list">
                                <a href="<?php echo $home; ?>#message"><span class="en">BON VOYAGE</span>ごあいさつ</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="https://shop.hiramipan.co.jp/" target="_blank"><span class="en">SHOPPING</span>おかいもの</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $news; ?>"><span class="en">NEWS</span>ひらみぱん通信</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <h1 class="p-sub-header__logo">
                    <a href="<?php echo $home; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="ひらみぱんのロゴ">
                    </a>
                </h1>
                <div class="p-sub-header__nav">
                    <nav class="p-globalNav">
                        <ul class="p-globalNav__lists">
                            <li class="p-globalNav__list">
                                <a href="<?php echo $home; ?>/event/"><span class="en">EVENT</span>催事</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $recruit; ?>"><span class="en">RECRUIT</span>採用情報</a>
                            </li>
                            <li class="p-globalNav__list">
                                <a href="<?php echo $home; ?>#about"><span class="en">ABOUT</span>わたしたちのこと</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="p-sub-header__hamburger">
                    <div class="c-hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="p-sub-header__drawer">
                    <div class="p-drawer">
                        <div class="p-drawer__inner">
                            <div class="p-drawer__logo">
                                <a href="<?php echo $home; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="ひらみぱんのロゴ">
                                </a>
                            </div>
                            <nav class="p-drawer__nav">
                                <ul class="p-drawer__links">
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $home; ?>#message">
                                            <span class="en">BON VOYAGE</span>ごあいさつ </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="https://shop.hiramipan.co.jp/" target="_blank">
                                            <span class="en">SHOPPING</span>おかいもの </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $news; ?>">
                                            <span class="en">NEWS</span>ひらみぱん通信 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $news; ?>event/">
                                            <span class="en">EVENT</span>催事 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $recruit; ?>">
                                            <span class="en">RECRUIT</span>採用情報 </a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $home; ?>#about">
                                            <span class="en">ABOUT</span>わたしたちのこと </a>
                                    </li>
                                </ul>
                                <div class="p-drawer__btn">
                                    <a href="https://shop.hiramipan.co.jp/" target="_blank">
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn_onlineshop.jpg" alt="オンラインショップ">
                                        </picture>
                                    </a>
                                </div>
                                <div class="p-drawer__btn">
                                    <a href="<?php echo $news; ?>sales/">
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn_schedule.svg" alt="ひらみぱんの移動販売の年間スケジュール">
                                        </picture>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>