<?php 
$home = esc_html(home_url('/'));
$recruit = esc_html(home_url('/recruit/'));
$news = esc_html(home_url('/news/'));
?>

<footer class="l-footer">
        <div class="p-footer">
            <div class="p-footer__inner l-inner">
                <div class="p-footer__logo">
                    <a href="<?php echo $home; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="ひらみぱんのロゴ">
                    </a>
                </div>
                <p class="p-footer__info --center"> ひらみぱん<br> 〒920-0865　石川県金沢市長町1-6-11<br> TEL:076-221-7831<br> 月曜日定休 （その他不定休あり） </p>
                <ul class="p-footer__sns">
                    <li>
                        <a href="https://www.instagram.com/hiramipan/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/insta.svg" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/p/ひらみぱん-100063601026992/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/facebook.svg" alt="facebook">
                        </a>
                    </li>
                </ul>
                <ul class="p-footer__links">
                    <li class="p-footer__link">
                        <a href="https://shop.hiramipan.co.jp/view/guide" target="_blank">はじめてのお客さまへ</a>
                    </li>
                    <li class="p-footer__link">
                        <a href="https://shop.hiramipan.co.jp/view/contract" target="_blank">お支払い・送料 </a>
                    </li>
                    <li class="p-footer__link">
                        <a href="https://shop.hiramipan.co.jp/view/policy" target="_blank">プライバシーポリシー</a>
                    </li>
                </ul>
                <p class="p-footer__copy">(C) Hiramipan</p>
            </div>
        </div>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>