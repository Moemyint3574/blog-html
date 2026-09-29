<?php get_header(); ?>

<main>
    <div class="intro">
        <div class="inner">
            <div class="box">
                <?php if (has_post_thumbnail()) : ?>

                    <?php the_post_thumbnail('large', array(
                        'class' => 'eyecatch'
                    )); ?>

                <?php else : ?>

                    <img class="eyecatch"
                        src="<?php echo esc_url(get_theme_file_uri('/img/introduction.png')); ?>"
                        alt="">

                <?php endif; ?>

                <p class="badge">Personal</p>
                <!-- <h3>はじめまして</h3> -->
            </div>
            <div class="date-part">
                <p class="date">Date</p>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
                </time>
            </div>

            <h2><?php the_title(); ?></h2>
            <img class="sakuraimg" src="<?php echo esc_url(get_theme_file_uri('/img/nanzenji_sakura_3985-1536x1025.png')); ?>" alt="">
            <?php the_content(); ?>

            <div class="button">
                <?php
                $next_post = get_next_post();
                ?>

                <?php if ($next_post) : ?>

                    <a class="next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                        NEXT
                    </a>

                <?php else : ?>

                    <a class="next" href="<?php echo esc_url(home_url('/')); ?>">
                        NEXT
                    </a>

                <?php endif; ?>
            </div>


            <?php comments_template(); ?>
            <!-- <div class="comment">
                <h2>COMMENT BOX</h2>
                <textarea class="comment-area" placeholder="コメントを入力してください"></textarea>

                <div class="submit">
                    <a href="#">SUBMIT</a>
                </div>
            </div> -->
            <div class="top">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width=" 50px" alt=""></a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>