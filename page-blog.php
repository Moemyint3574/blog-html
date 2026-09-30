<?php get_header(); ?>
<main>
    <section class="blog">
        <div class="inner">
            <h2>
                <span>BLOG</span>
                <img class="leaf-icon" src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" alt="">
            </h2>
            <div class="blog-list">
                <?php
                // ① 現在のページ番号を取得する（もし取得できなければ 1 ページ目とする）
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 2,
                    'paged'          => $paged, // ② 取得したページ番号を条件にセットする
                );

                $custom_query = new WP_Query($args);

                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                            <a href="<?php the_permalink(); ?>">

                                <div class="box">

                                    <?php if (has_post_thumbnail()) : ?>

                                        <?php the_post_thumbnail('medium-large'); ?>

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

                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total'     => $custom_query->max_num_pages, // サブループの全ページ数を教える
                            'current'   => $paged,                       // 現在のページ番号を教える
                            'mid_size'  => 1,
                            'prev_text' => '前へ',
                            'next_text' => '次へ',
                        ));
                        ?>
                    </div>

                <?php else : ?>

                    <p>記事はありません。</p>

                <?php
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </section>
    <div class="top">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width="50px" alt=""></a>
    </div>
</main>
<?php get_footer(); ?>