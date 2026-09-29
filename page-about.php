<?php get_header(); ?>
<main>
    <section class="about">
        <div class="inner">
            <h2>
                <span>ABOUT</span>
                <img class="leaf-icon" src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" alt="">
            </h2>
            <div class="profile">
                <img src="<?php echo esc_url(get_theme_file_uri('/img/about.png')); ?>" alt="" width="300" height="300">
                <div class="me">
                    <h3>MOE MYINT MYINT</h3>
                    <p>トライデントコンピュータ専門学校</p>
                    <p>Webデザイン学科</p>
                    <div class="para">
                        <p>このブログでは、Webデザインの勉強や学校で制作
                            した作品を紹介しています。。。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="top">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width="50px" alt=""></a>
    </div>
</main>
<?php get_footer(); ?>