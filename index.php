<?php get_header(); ?>
<main>
    <div class="inner">
        <div class="mainvisual">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/mainvisual.png')); ?>" alt="">
        </div>
    </div>
    <section class="blog">
        <div class="inner">


            <h2>
                <span>BLOG</span>
                <img class="leaf-icon" src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" alt="">
            </h2>
            <div class="blog-list">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                            <a href="<?php the_permalink(); ?>">

                                <div class="box">

                                    <?php if (has_post_thumbnail()) : ?>

                                        <?php the_post_thumbnail('thumbnail'); ?>

                                    <?php else : ?>

                                        <img
                                            src="<?php echo esc_url(get_theme_file_uri('/img/introduction.png')); ?>"
                                            alt="">

                                    <?php endif; ?>

                                    <p class="badge">Personal</p>

                                </div>

                                <div class="date-part">

                                    <p class="date">Date</p>

                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                        <?php echo get_the_date('Y.m.d'); ?>
                                    </time>

                                </div>

                                <p class="sub">
                                    <?php the_title(); ?>
                                </p>

                            </a>

                        </article>

                    <?php endwhile; ?>

                <?php else : ?>

                    <p>記事はありません。</p>

                <?php endif; ?>


            </div>
            <div class="button">
                <a class="more" href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>">View More</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
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

    <section id="category" class="category">
        <div class="inner">
            <h2>
                <span>CATEGORY</span>
                <img class="leaf-icon" src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" alt="">
            </h2>
            <div class="category-list">
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('Personal'))); ?>">
                    <div class="category-item">
                        <dt>Personal</dt>
                        <dd>はじめまして</dd>
                    </div>
                </a>
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('Personal'))); ?>">
                    <div class="category-item">
                        <dt>Personal</dt>
                        <dd>名古屋駅周辺探索</dd>
                    </div>
                </a>
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('Personal'))); ?>">
                    <div class="category-item">
                        <dt>Personal</dt>
                        <dd>おすすめWebサイト</dd>
                    </div>
                </a>
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('Personal'))); ?>">
                    <div class="category-item">
                        <dt>Personal</dt>
                        <dd>地元のスポート紹介</dd>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <div class="top">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width="50px" alt=""></a>
    </div>
</main>
<?php get_footer(); ?>