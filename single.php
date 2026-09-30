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
            <!-- <img class="sakuraimg" src="<?php echo esc_url(get_theme_file_uri('/img/nanzenji_sakura_3985-1536x1025.png')); ?>" alt=""> -->
            <?php the_content(); ?>

            <div class="button">
                <?php
                $previous_post = get_previous_post();
                $next_post = get_next_post();
                ?>

                <div class="post-navigation">

                    <?php if ($previous_post) : ?>
                        <a class="previous" href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>">
                            PREVIOUS
                        </a>
                    <?php endif; ?>

                    <?php if ($next_post) : ?>
                        <a class="next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                            NEXT
                        </a>
                    <?php endif; ?>

                </div>
            </div>


            <?php comments_template(); ?>

            <div class="top">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width=" 50px" alt=""></a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>