<?php get_header(); ?>

<main>
    <div class="inner error-page">
        <h2 class="error">404 ERROR</h2>
        <p> PAGE NOT FOUND!!!</p>

        <aside class="side-search">

            <?php get_search_form(); ?>

        </aside>

        <div class="top">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/leaf2.svg')); ?>" width="50px" alt=""></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>