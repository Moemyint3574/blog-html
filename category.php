<?php get_header(); ?>
<main>
    <section class="category-page">

        <div class="inner">

            <div class="category-heading">
                <p class="small-title">MY BLOG</p>

                <h2><?php single_cat_title(); ?></h2>

                <p>
                    私の日常や好きなことを紹介します。
                </p>
            </div>


            <section class="personal-category">

                <div class="category-title">
                    <span>01</span>
                    <h3><?php single_cat_title(); ?></h3>
                </div>


                <div class="category-list">

                    <?php if (have_posts()) : ?>

                        <?php
                        $number = 1;
                        while (have_posts()) :
                            the_post();
                        ?>

                            <a class="category-item"
                                href="<?php the_permalink(); ?>">

                                <div class="number">
                                    <?php echo sprintf('%02d', $number); ?>
                                </div>

                                <div class="category-content">

                                    <p>
                                        <?php single_cat_title(); ?>
                                    </p>

                                    <h4>
                                        <?php the_title(); ?>
                                    </h4>

                                </div>

                                <span class="arrow">→</span>

                            </a>

                        <?php
                            $number++;
                        endwhile;
                        ?>

                    <?php else : ?>

                        <p>記事はありません。</p>

                    <?php endif; ?>

                </div>

            </section>

        </div>

    </section>


    <div class="top">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>"
                width="50"
                alt="TOP">
        </a>
    </div>

</main>

<?php get_footer(); ?>