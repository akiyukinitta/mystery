<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<main>
    <section class="ly_page">
        <div class="ly_inner">
            <h1 class="el_lv1heading el_lv1heading--1 hp_en js_eachTextAnime">
            <?php the_title() ?>
            </h1>
            <?php the_content(); ?>
        </div>
    </section><!-- /.ly_page -->
</main>

<?php get_footer(); ?>